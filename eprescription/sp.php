<!DOCTYPE html>
 <head>
        <title>E_Prescription</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
         <link rel="icon" href="css/fav.png" type="image/gif">
    </head>
    <body>
        <!-- Header Area -->
        <div class="container text-center">
            <div class="row">
                
                <div class="header col-md-12">
                    <a href="index.php"><h1>E_prescription</h1></a>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="input_area col-md-12">
                    <form method="post" action="">
                        <button type="submit" name="refresh_btn">Refresh</button>
                    </form>
                </div>
            </div>
        </div>

        <?php
        if (isset($_POST['refresh_btn'])) {
            header('Location: search.php');
        }
        ?>

        <div class="container text-center">
            <div class="row">
                <div class="head_page col-md-10" align="left">
                    <div class="txt" ><h3>Search By Name: </h3></div>
                </div>
            </div>
        </div>


        <div class="container text-center">
            <div class="row">
                <div class="input_area col-md-12">
                    <form method="post" action="">
                        <input class="col-md-4" type="text" name="name">
                        <button type="submit" name="search_btn1">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="head_page col-md-12" align="left" >
                    <div class="txt" ><h3>Search By Id: </h3></div>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="input_area col-md-12">
                    <form method="post" action="">
                        <input class="col-md-4" type="text" name="id">
                        <button type="submit" name="search_btn2">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="head_page col-md-12" align="left" >
                    <div class="txt" ><h3>Search By mobile: </h3></div>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="input_area col-md-12">
                    <form method="post" action="">
                        <input class="col-md-4" type="text" name="catagory">
                        <button type="submit" name="search_btn4">Search</button>
                    </form>
                </div>
            </div>
        </div>
       
 

        <?php
        session_start();
        echo "wellcome0 ".$_SESSION["user"];
   
        $b = 0;
        $d = 0;
        $i = 0;
        $c = 0;
        $key = NULL;
        if (isset($_POST['search_btn1'])) {
            $key = $_POST['name'];
            $con = mysqli_connect("localhost", "root", "", "ep");
            $show_query = "select * from (SELECT *  from patient ) as result where name LIKE '%{$key}%'";
            $b = 1;

            $result = mysqli_query($con, $show_query);

            $c = mysqli_num_rows($result);


            while ($row = mysqli_fetch_assoc($result)) {
                $patientdetails[] = $row;
                $i++;
            }


            $serial_no = 0;
        }
       
        

        if (isset($_POST['search_btn2'])) {
            $key = $_POST['id'];

            $con = mysqli_connect("localhost", "root", "", "ep");
            $show_query = "select * from (SELECT *  from patient ) as result where id LIKE '%{$key}%'";
            $d = 1;


            if ($result = mysqli_query($con, $show_query)) {
                $c = mysqli_num_rows($result);
                while ($row = mysqli_fetch_assoc($result)) {
                    $patientdetails[] = $row;
                    $i++;
                }
            }


            $serial_no = 0;
        }
        if (isset($_POST['search_btn4'])) {
            $key = $_POST['catagory'];
            $con = mysqli_connect("localhost", "root", "", "ep");
            $show_query = "select * from (SELECT *  from patient ) as result where mobile LIKE '%{$key}%'";
            $b = 1;

            $result = mysqli_query($con, $show_query);

            $c = mysqli_num_rows($result);


            while ($row = mysqli_fetch_assoc($result)) {
                $patientdetails[] = $row;
                $i++;
            }


            $serial_no = 0;
        }
        ?>


        <!-- Show Data -->
        <div class="container text-center">
            <div class="row">
                <div class="show_data_area col-md-12">
                    <table class="table col-md-12">
                        <tr class="success">
                            <td>#</td>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Address</td>
                            <td>Mobile</td>

                            <td>Details</td>
                            <td>Action</td>
                        </tr>



                        <?php
                        if ($i != 0) {
                            foreach ($patientdetails as $patient) {
                                $serial_no++;
                                ?>
                                <tr>
                                    <td><?php echo $serial_no; ?></td>                                
                                    <td align="left"><?php echo $patient['id']; ?></td>
                                    <td align="left"><?php echo $patient['name']; ?></td>
                                    <td align="left"><?php echo $patient['address']; ?></td>
                                    <td align="left"><?php echo $patient['mobile']; ?></td>
                                  
                                    <td><a class="btn btn-success" href="pd.php?id=<?php echo $patient['id']; ?>">Show Details</a></td>
                                    <td><a class="btn btn-success" href="mainp.php?id=<?php echo $patient['id']; ?>">Create Prescription</a></td>
                                </tr>
                                <?php
                            }
                        }
                        ?> 	
                    </table>
                </div>
            </div>
        </div>

        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/scrolltop.js"></script>
        <script src="css/bootstrap/bootstrap.min.js"></script>	
        <?php
        if ($c == NUll && ($key != NULL)) {
            echo "<p class='text-center bg-danger'>Not Found!</p>";
            header("Refresh:0.5; url=search.php");
        }
        ?>
    </body>
</html>