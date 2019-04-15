<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>E-prescription</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	
	<div class="wrap-header">
		<div class="container">
		<div id="left"> 
				<h1 class="logo"><a href="#" title="E-prescription">E-prescription</a></h1>
				<nav class="primary">
				</div>	
					
						

     <div id="right">
	<form  action="form_action.php" method="post">
    <div class="container">

    <div id="first"> 
    <label for="uname"><b><font color=#d7dbdd>User ID / Email</font></b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

        <div class="success">
    <a href="add_doc.php"><h4>Sign Up</h4></a>

    </div>
    </div>	

    <div id="second"> 
    <label for="psw"><b><font color=#d7dbdd>Password</font></b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    </div>	
    
    <div id="third">  
       <br>
    <button type="submit">Login</button>
    <label>
    <input type="checkbox" checked="checked" name="remember"><font color=#d7dbdd> Remember me</font>
    </label>
        <div class="container">
    <!<button type="button" class="cancelbtn"><!<Cancel</button>
    <span class="psw"> <a href="resetpass.php">Forgot password?</a></span>
    </div>
    </div>
    </div>




    </form>
    </div>
					
				</nav>
		</div>	
		
		<div class="container slides">	
				<ul class="rslides clearfix">
				  <li>
				  	<img src="images/slide1.jpg" alt="" />
					
				  </li>
				   <li>
					<img src="images/slide2.jpg" alt="" />
					
				  </li>
				   <li>
					<img src="images/slide3.jpg" alt="" />
					
				  </li>
				</ul>
				<h2>Web Based Project</h2>
		</div>
	</div><!-- end wrap-header -->
		
	<div class="container welcome">
			<h1>This Software development project named <span class="green">E prescription</span> is submitted to </br> Al-Hasan,Lecturer,CSE depertment,BAUST </h1>
			<span class="graphic"><img src="images/graphic.png" alt="" /></span>
	</div><!-- end welcome -->		
		
		
	<div class="container service">	
		<div class="one-third column">
			<h2>Doctor Profile</h3>
			<p>Sign Up and Login as a doctor and create new patient,write prescription for a patient,store it in database and print it any time!</p>
			
		</div>
		
		<div class="one-third column">
			<h2>Patient Profile</h3>
			<p>A patient profile to see his/her all previous disease history.</p>
			
		</div>
		
		<div class="one-third column">
			<h2>Prescription</h3>
			<p>All prescription are kept in digital format and print it any time!/p>
			
		</div>
	</div><!-- end service -->
		
	
	
	
	
	<footer class="sub-footer">
			<div class="container">
				<div class="eight columns left">
					<p>Copyright 2010 <a href="#"></a> | Design by <a href="#">Nafi,Rafi,Shuvo,Topu</a></p>
				</div>	
					
				<div class="eight columns right">
					<h1 class="logo"><a href="#" title="Artthatworks">Artthatworks</a></h1>
				</div>	
			</div>
	</footer>	
<!-- End Document
================================================== -->
<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.elastislide.js"></script>
<script>
  $(function () {
	$(".rslides").responsiveSlides({
		pager: true,  
		nav: true
		
	});
	$('#carousel').elastislide({
		imageW 	: 300,
		minItems	: 3
	});  	 
  });
</script>

</body>
</html>