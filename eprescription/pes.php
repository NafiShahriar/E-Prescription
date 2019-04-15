<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "ep");
$id = $_GET['id'];
$show_user = "select * from (SELECT *  from pes) as result where tid=$id";
$result = mysqli_query($con, $show_user)->fetch_assoc();
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

        <h1><?php echo $result['hos']; ?></h1>

					<h3><?php echo $result['dname']; ?></h3>
					<h4><?php echo $result['degree']; ?></h4>
					<h4><?php echo $result['dadd']; ?></h4>
					<h4><?php echo $result['dmob']; ?></h4>

         </div> 
         <div class="mdcn">
                    
					<span class="font1">Name:</span> <span class="font2"><?php echo $result['pname']; ?></span><span class="font1">Address:</span> <span class="font2"><?php echo $result['padd']; ?></span><span class="font1">Date of birth:</span> <span class="font2"><?php echo $result['dob']; ?></span><span class="font1">Mobile:</span> <span class="font2"><?php echo $result['pmob']; ?></span><span class="font1">Weight:</span> <span class="font2"><?php echo $result['weight']; ?></span>
                   				
					</div>
         
         <div class="content-1"  enctype="multipart/form-data">
                    <div id="left"> 
                    
                    <textarea rows="42" cols="49" name="cm1" ><?php echo $result['test']; ?></textarea>

                    </div>		 
                    <div id="right">
                    
                   
                    <textarea rows="42" cols="83" name="cm2"><?php echo $result['rx']; ?></textarea>
                    	
                    </div>	

        </div>	
		
         
         <div class="footer"> 
         <button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>
          </form>
            </div>
		 
 </body>
 </html>
 