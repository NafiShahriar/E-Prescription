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
                    <h2>New Patients</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <form action="" method="post" class="col-md-12"  enctype="multipart/form-data">
                    
                   <div class="sigle-input col-md-12">
                        <label class="col-md-3">Name:  </i></font></label>
                        <input class="col-md-8" type="text" name="name" >
                    </div>
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">Address:  </i></font></label>
                        <input class="col-md-8" type="text" name="add" >
                    </div>
                   
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">Mobile :  </i></font></label>
                        <input class="col-md-8" type="text" name="mob" >
                    </div>
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">Date of birth:  </i></font></label>
                        <input class="col-md-8" type="date" name="dob" >
                    </div>
                    <div class="sigle-input col-md-12">
                        <label class="col-md-3">Weight:  </i></font></label>
                        <input class="col-md-8" type="text" name="wei" >
                    </div>
                  
                    <div class="sigle-input col-md-12 text-center submit-data">
                        <input class="col-md-2" type="submit" name="submit" value="Save">
                        <input class="col-md-2" type="reset" value="Reset">
                    </div>
                </form>
            </div>
        </div>


        <?php

        $fk = 1;
        $submit = NULL;
        
//Insert
        
        if (isset($_POST['submit'])) {
            
            $Name = $_POST['name'];
            $Add = $_POST['add'];
            
            $Mob= $_POST['mob'];
            $Dob = $_POST['dob'];
            $Wei = $_POST['wei'];
            
            
           

            $con = mysqli_connect("localhost", "root", "", "ep");
            $query = "INSERT INTO patient (name,address,mobile,dob,weight) VALUES ('$Name','$Add','$Mob','$Dob','$Wei')";
            


             if (!empty($Name) ) {
                $result = mysqli_query($con, $query);
                
                if ($result ) {

                    $fk = 0;
                } else
                    echo "<p class='text-center bg-danger'>Not Inserted!</p>";
            } else
                echo "<p class='text-center bg-danger'>Error!</p>";

            if ($fk == 0) {
                header('Location: ' . $_SERVER['REQUEST_URI'] . '?submit=true');
            }
        }
        ?>
        
        <?php
        $v_submit = isset($_GET["submit"]);
        if ($v_submit == 'true') {
            echo "<p class='text-center bg-submit'><b>INSERTED SUCCESSFULLY</b></p>";
            //header("Refresh:0.5; url=nwp.php");
        }
        ?>


    </body>
</html>