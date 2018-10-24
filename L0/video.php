<!DOCTYPE html>
<html lang="en">
<head>
<title>SurSaptak: Online Courses</title>
<!-- custom-theme -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Sofia" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
<style>
	p.uppercase {
    text-transform: uppercase;
    color: black;
    font-size: 90%;
}
	p1.uppercase {
    text-transform: uppercase;
    font-size: 120%;
}
</style>
</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button> 	
					<h1><a class="navbar-brand" href="index.html"><span>Sur<br>Saptak</span></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="index.html" class="menu__link">Home</a></li>
							<li class="menu__item menu__item--current"><a href="instruments.php" class="menu__link">Online Course</a></li>
							<li class="menu__item"><a href="shops.html" class="menu__link">Find Near By Shops</a></li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Account <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="login.html">Log In</a></li>
									<li><a href="signup.html">Sign Up</a></li>
								</ul>
							</li>
							<li class="menu__item"><a href="mail.html" class="menu__link">Mail Us</a></li>
							<li class="menu__item "><a href="reports.php" class="menu__link">Reports</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- //banner -->	
<!-- breadcrumbs -->
	<div class="breadcrumbs">  
		<h1><p class="uppercase"><?php session_start(); echo $_SESSION[level]." ".$_SESSION[instrument]; ?> Lessons</p></h1>
		<!--<h1>Begginer Guitar Lessons</h1> -->
	</div>
	<?php
	session_start();
	$temp = $_GET['lessonid'];
	$connect=pg_connect("host=localhost dbname=kedar user=kedar password=kedar")or die("Unable to connect");
	$query1=" select link from lesson where lesson_id =".$temp.";";
	$qr=pg_query($connect,$query1)or die("Unable to connect query");
	$row = pg_fetch_row($qr);
	echo"<div class=\"container\">";
	echo"<iframe width=\"1150\" height=\"500\" align=\"center\" src=\"$row[0]?autoplay=1\" frameborder=\"0\"  allowfullscreen=\"\"></iframe>";
echo"</div>";

	echo $_SESSION['instrument'].$_SESSION['level'];
	?>
<!-- breadcrumbs -->
<div class="container">

</div>


<div class="breadcrumbs">
		
	</div>



<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 agileinfo_footer_grid">
				<h3><font color="white">About Us</font></h3>
				<p><span>
				We provide finest and highly experienced Music Tutors who hold music degrees from wellknown and popular Music Schools.<br>
				We will always try to give our students the best we can.<br>
				Happy Learning!
				</span></p>
				
				<div class="agileits_footer_grid_gallery">
					
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 agileinfo_footer_grid">
				
			</div>
			<div class="col-md-4 agileinfo_footer_grid">
				<h3><font color="white">Social Media</font></h3>
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span><i>-</i>Facebook</a></li>
					<li><a href="#" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span><i>-</i>Instagram</a></li>
				</ul>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- copy-right -->
	<div class="w3agile_copy_right">
		<div class="container">
			 <p> </p>
		</div>
	</div>
</body>
</html>