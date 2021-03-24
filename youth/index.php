

<?php

require_once "config.php";


if (isset($_POST['submit'])){




$name=$_POST['name'];
#user id can be an email or a username
$pass=md5($_POST['password']);
#password
$query = mysqli_query(" SELECT * FROM 'user' WHERE '$name' IN (username, email) AND 'password'='$pass'");






}
	



?>



<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
<title>Youth Empowerment Assembly</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='assets/css/animate.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C700italic%2C300%2C400%2C700%2C800%7CMontserrat%3A300italic%2C400italic%2C700italic%2C300%2C400%2C700%7CDosis%3A400%2C700&#038;ver=4.5' type='text/css' media='all'/>
<link rel='stylesheet' href='icons/elegantline/style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/flexslider.css' type='text/css' media='all'/>




</head>
<body class="frontpage">
<div class="page-loader">
	<img src="assets/img/loader.gif" alt="loader">
</div>

<!-- Header
================================================== -->
<header id="header">
<div id="mega-menu" class="header header2 header-sticky primary-menu icons-no default-skin zoomIn align-right">
	<nav class="navbar navbar-default redq">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">
			<img src="assets/img/logo.png" alt="logo">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<a class="mobile-menu-close"><i class="fa fa-close"></i></a>
			<div class="menu-top-menu-container">
				<ul id="menu-top-menu" class="nav navbar-nav nav-list">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#services">Services</a></li>

					<li><a href="#blog">Blog</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
	</nav>
</div>
</header>	

<!-- INTRO
================================================== -->
<section id="home" style="padding:160px 0;background-image: url(assets/img/back.jpg); background-position: center; background-repeat: no-repeat;background-size: cover;background-attachment:fixed;">
	<div class="container">
		<div class="textwidget">
			<h1 style="color:white;" class="toptitle">Welcome to <br/> Youth Empowerment Assembly<br/><br/><i style="background-color:lightseagreen" class="fa fa-user roundicon"></i>
			</h1>								
			<div class="contactstyle topform">										
			<form  id="" action="index.php"  method="post">
					<div class="form">
						<input type="text" name="name" placeholder="Email Or Phone  Number*">
						<input type="password" name="password" placeholder="Password *">
						
						<input style="background-color:aquamarine" type="submit" name="submit" id="submit" class="clearfix btn" value="	LOG IN">


						

						<a href="signup.php"><input type="button" name="btn_signup" id="submit_reg" class="clearfix btn " value="Sign Up"></a>
				
					</div>
				</form>
				<div class="done">
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>
						Your message has been sent. Thank you!
					</div>
				</div>
			</div>								
		</div>
		</div>
</section>

<!-- THE END OF SECTIONS -->	
	
<!-- FOOTER
================================================== -->
<footer id="footer" class="footer2">
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<small>
					&copy; <a href="https://www.wowthemes.net/">
							 Youth Empowerment Assembly
							</a>
					</small>
				</div>
				<div class="col-md-6 text-right">
					<div class="footer-menu">
						<ul id="menu-footer-links" class="menu">
							<li><a href="#"><i class="fa fa-facebook"></i> Like us on Facebook</a></li>
							<li><a href="#"><i class="fa fa-twitter"></i> Follow us on Twitter</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>





<!-- SCRIPTS
================================================== -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="contact/topvalidate.js"></script>
<script src="contact/bottomvalidate.js"></script>


</body>
</html>
