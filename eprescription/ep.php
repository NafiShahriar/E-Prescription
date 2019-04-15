<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "ep");
$id = $_SESSION["user"];


$show_user = "select * from (SELECT *  from doctor) as result where uname='$id'";
$result = mysqli_query($con, $show_user)->fetch_assoc();

?>


<!DOCTYPE html>
<html>
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
                    <a href="index.php"><h1>E_Prescription</h1></a>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="head_page col-md-12">
                    <h2>Profile of : <?php echo $result['name']; ?></h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <form action="" method="post" class="col-md-12" enctype="multipart/form-data">
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">User Name:   </label>
                        <input class="col-md-8" type="text" name="uname"  value="<?php echo $result['uname']; ?>">

                    </div>
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">Name:   </label>
                        <input class="col-md-8" type="text" name="name"  value="<?php echo $result['name']; ?>">

                    </div>
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">Hospital:   </label>
                        <input class="col-md-8" type="text" name="hospital"  value="<?php echo $result['hospital']; ?>">

                    </div>
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">Address:   </label>
                        <input class="col-md-8" type="text" name="address"  value="<?php echo $result['address']; ?>">

                    </div>
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">Mobile:   </label>
                        <input class="col-md-8" type="text" name="mobile"  value="<?php echo $result['mobile']; ?>">

                    </div>
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">Specialist:   </label>
                        <input class="col-md-8" type="text" name="special"  value="<?php echo $result['special']; ?>">

                    </div>
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">Degree:   </label>
                        <input class="col-md-8" type="text" name="degree"  value="<?php echo $result['degree']; ?>">

                    </div>
                    

                    <div class="sigle-input col-md-12 text-center submit-data">
                        <input class="col-md-2" type="submit" name="update" value="Update">
                        <input class="col-md-2" type="reset" name="reset" value="Reset">
                        <input class="col-md-2" type="submit" name="delete" value="Delete">
                       

                    </div>
                </form>
               
                </form>
              
            </div>
        </div>

        <?php
        
        //Delete        
        
        if (isset($_POST['delete'])) {
             $delete_query = "delete from doctor where doctor.uname='$id'";
             

            if (mysqli_query($con, $delete_query)) {
                
                
                echo "<p class='text-center bg-submit'><b>DELETED SUCCESSFULLY</b></p>";
                header("Refresh:0.5; url=index.php");
            } else {
                echo "<p class='text-center bg-danger'>Error</p>";
            }
            
        }
     
        ?>

    </body>
</html>
