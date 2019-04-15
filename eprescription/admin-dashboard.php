<?php
session_start();


?>

<!DOCTYPE html>
<head>
	<title>Admin Dashboard</title>
</head>
<body>
<?php 
	if($_SESSION["user"]==true){
		echo "wellcome ".$_SESSION["user"]; }
	else
		header('Location: admin-login.php'. '?key=true');
?>

<a style="color:red" href="add_data.php">Add data</a><br>
<a style="color:red" href="manage_user.php">view user</a><br>
<a style="color:red" href="view_data.php">view data</a><br>
<a style="color:red" href="create_table.php">create table</a>

<a style="color:green" href="logout.php">Log out</a><br>
</body>
</html>