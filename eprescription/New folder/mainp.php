<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "ep");
$id = $_GET['id'];
$show_user = "select * from (SELECT *  from patient) as result where id=$id";
$result = mysqli_query($con, $show_user)->fetch_assoc();


$idd = $_SESSION["user"];


$show_user = "select * from (SELECT *  from doctor) as result where uname='$idd'";
$results = mysqli_query($con, $show_user)->fetch_assoc();
?>
<!DOCTYPE html>
<html>
     <head>
        <title>E_Prescription</title>
        
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
     <div class="container">
            <div class="row">
                <form action="" method="post" class="col-md-12"  enctype="multipart/form-data">
                    
                   <div class="banner">
                    
					<h1><?php echo $results['hospital']; ?></h1>

					<h3><?php echo $results['name']; ?></h3>
					<h4><?php echo $results['degree']; ?></h4>
					<h4><?php echo $results['address']; ?></h4>
					<h4><?php echo $results['mobile']; ?></h4>

					





					</div>

					<div class="mdcn">
                    
					<span class="font1">Name:</span> <span class="font2"><?php echo $result['name']; ?></span><span class="font1">Address:</span> <span class="font2"><?php echo $result['address']; ?></span><span class="font1">Date of birth:</span> <span class="font2"><?php echo $result['dob']; ?></span><span class="font1">Mobile:</span> <span class="font2"><?php echo $result['mobile']; ?></span><span class="font1">Weight:</span> <span class="font2"><?php echo $result['weight']; ?></span>
                   				
					</div>
					<div class="main">
					<div class="left">
					<span class="font2">Test/Suggestion:</span>
					
					</div>
					<div class="right">


					
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