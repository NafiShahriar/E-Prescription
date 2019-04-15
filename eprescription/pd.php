<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "ep");
$id = $_GET['id'];
$show_user = "select * from (SELECT *  from patient) as result where id=$id";
$result = mysqli_query($con, $show_user)->fetch_assoc();
 ?>
<!DOCTYPE html>

<html>
     <head>
        <title>BAUST Library</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
         <link rel="icon" href="css/fav.png" type="image/gif">
    </head>
    <body>
        <!-- Header Area -->
        <div class="container text-center">
            <div class="row">
                
                <div class="header col-md-12">
                    <a href="index.php"><h1>Library Management</h1></a>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="head_page col-md-12">
                    <h2>Details of : <?php echo $result['name']; ?></h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <form action="" method="post" class="col-md-12" enctype="multipart/form-data">
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">Name:   </label>
                        <input class="col-md-8" type="text" name="name"  value="<?php echo $result['name']; ?>">

                    </div>
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">ID: </label>
                        <input class="col-md-8" type="text" name="author"  value="<?php echo $result['id']; ?>">

                    </div>
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">Address: </label>
                        <input class="col-md-8" type="publisher" name="publisher"  value="<?php echo $result['address']; ?>">

                    </div>
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">Mobile:  </label>
                        <input class="col-md-8" type="text" name="depertment"  value="<?php echo $result['mobile']; ?>">
                    </div>
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">Date of Birth:  </label>
                        <input class="col-md-8" type="Date" name="quantity"  value="<?php echo $result['dob']; ?>">
                    </div>
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">Weight:  </label>
                        <input class="col-md-8" type="text" name="depertment"  value="<?php echo $result['weight']; ?>">
                    </div>

                    

                    <div class="sigle-input col-md-12 text-center submit-data">
                        <input class="col-md-2" type="submit" name="update" value="Update">
                        <input class="col-md-2" type="reset" name="reset" value="Reset">
                        <input class="col-md-2" type="submit" name="delete" value="Delete">
                       

                    </div>
                    </form>
                <form action="mainp.php" method="get" class="col-md-12">
                <div class="sigle-input col-md-12 text-center submit-data">
                <input type="hidden" name="id" value="<?php echo $id ?>"><input class="col-md-2" type="submit" value="Add prescription">
                </div>
                </form>
                 <?php
        $b = 0;
        $d = 0;
        $i = 0;
        $c = 0;
        //$key = NULL;
        
            //$key = $_POST['name'];
            $con = mysqli_connect("localhost", "root", "", "ep");
            $show_query = "select * from (SELECT *  from patient natural join pes where patient.id=pes.pid)  as result where id=$id";
            $b = 1;

            $result = mysqli_query($con, $show_query);

            $c = mysqli_num_rows($result);


            while ($row = mysqli_fetch_assoc($result)) {
                $patientdetails[] = $row;
                $i++;
            }


            $serial_no = 0;
        
        ?>




         <!-- Show Data -->
        <div class="container text-center">
            <div class="row">
                <div class="show_data_area col-md-12">
                    <table class="table col-md-12">
                        <tr class="success">
                            <td>#</td>
                            <td>Prescription No</td>
                            
                            <td>Doctor</td>
                            <td>View</td>
                        </tr>



                        <?php
                        if ($i != 0) {
                            foreach ($patientdetails as $patient) {
                                $serial_no++;
                                ?>
                                <tr>
                                    <td><?php echo $serial_no; ?></td>                                
                                   
                                    <td align="left"><?php echo $patient['tid']; ?></td>
                                    <td align="left"><?php echo $patient['dname']; ?></td>
                                   
                                   
                                    
                                    <td><a class="btn btn-success" href="pes.php?id=<?php echo $patient['tid']; ?>">Show Details</a></td>
                                    </a></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>  
                    </table>
                </div>
            </div>
        </div>
              
            </div>
        </div>
        </body>
</html>