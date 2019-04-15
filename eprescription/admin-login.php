<?php 
//session_start();

?>

<body>

<h2>Login Form</h2>
<?php 
$v_submit = isset($_GET["key"]);
if($v_submit==true){
	
	echo "You have to login first.";
}


?>

<form  action="form_action.php" method="post">


  <div class="container">
    <label for="uname"><b>User ID/Email</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required>
<br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>    
    <button type="submit">Login</button><br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="resetpass.php">password?</a></span>
  </div>
</form>

</body>
</html>