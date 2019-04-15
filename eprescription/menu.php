<!DOCTYPE html>
<html>
    <head>
        <title>home</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="icon" href="css/fav.png" type="image/gif">
    </head>
    <body>
        <!-- Header Area -->
        <div class="container text-center">
            <div class="row">

                <div class="header col-md-12">
                    <a href="index.php"><h1>E Prescription</h1></a>
                </div>
            </div>
        </div>

        <!-- Input Part -->
        <form action="" method="post" class="col-md-12" enctype="multipart/form-data">
            <div class="sigle-input col-md-12 text-center submit-data">
                <input class="col-md-2" type="submit"  name="add_button" value="Add Patient">
                <input class="col-md-2" type="submit"  name="adds_button" value="Create Prescription">
                 <input class="col-md-2" type="submit"  name="s_button" value="Edit Profile">
                 
                <input class="col-md-2" type="submit" name="search_button" value="Search">
            </div>

        </form>

        <?php
        session_start();
        echo "wellcome0 ".$_SESSION["user"];
   
        



        if (isset($_POST['add_button'])) {
            header('Location: nwp.php');
        }
        if (isset($_POST['adds_button'])) {
           
            header('Location: cp.php');
        }
         if (isset($_POST['s_button'])) {
            header('Location: ep.php');
        }
        

        if (isset($_POST['search_button'])) {
            header('Location: sp.php');
        }
        
        ?>


        

        
    </ul>

        

    </body>
</html>
