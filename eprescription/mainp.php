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
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BAUST Class Practice</title>
	<link rel="stylesheet" type="text/css" href="style.css" />	
</head>
<body > 
<div class="row">
               
   
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
         
         <form action="" method="post" class="content-1"  enctype="multipart/form-data">
                    <div id="left"> 
                    
                    <textarea rows="42" cols="49" name="cm1" ></textarea>

                    </div>		 
                    <div id="right">
                    
                   
                    <textarea rows="42" cols="83" name="cm2"></textarea>
                    	
                    </div>	


		
         
         <div class="footer"> 
          <input class="col-md-2" type="submit" name="submit" value="Save"></div>
          </form>
            </div>
		 
 </body>
 </html>
 <?php

        $fk = 1;
        $submit = NULL;
        
//Insert
        
        if (isset($_POST['submit'])) {
            
            $Hos = $results['hospital'];
            $Dname = $results['name'];
            
            $Degree=$results['degree'];
            $Dadd= $results['address'];
            $Dmob = $results['mobile']; 
            $Pname = $result['name']; 
            $Padd =  $result['address']; 
            $Dob = $result['dob']; 
            $Pmob =  $result['mobile']; 
            $Weight=$result['weight']; 
            $Test=$_POST['cm1'];
            $Rx=$_POST['cm2'];
             $con = mysqli_connect("localhost", "root", "", "ep");
            $query = "INSERT INTO pes (hos,dname,degree,dadd,dmob,pname,padd,dob,pmob,weight,test,rx,pid) VALUES ('$Hos','$Dname','$Degree','$Dadd','$Dmob','$Pname','$Padd','$Dob','$Pmob','$Weight','$Test','$Rx','$id')";
            


             if (!empty($Rx) ) {
                $result = mysqli_query($con, $query);
                
                if ($result ) {

                    $fk = 0;
                } else
                    echo "<p class='text-center bg-danger'>Not Inserted!</p>";
            } else
                echo "<p class='text-center bg-danger'>Error!</p>";

            if ($fk == 0) {
                header('Location:menu.php' );
            }
        }
        ?>
        
      

    </body>
</html>