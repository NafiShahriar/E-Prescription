<?php 
  include('config/db_connect.php'); 
   
?>

<?php

	$user=$_REQUEST['uname'];
	$pass=$_REQUEST['psw'];
	$sql="select * from doctor where uname='$user' and pass='$pass'";
	$result=mysqli_query($con, $sql);
	$count=mysqli_num_rows($result);
	
	if ($count!=0) {
		$_SESSION["user"]=$user;
		echo "wellcome0 ".$_SESSION["user"];
         header('Location: menu.php');
	} else {
		echo "Error creating table: ";
	}

?>