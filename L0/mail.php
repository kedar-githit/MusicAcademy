<!DOCTYPE html>
<html lang="en">
<head>
<title>Mail Us</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Symphony Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet"></head>
	
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
					<h1><a class="navbar-brand" href="index.html"><span>SurSaptak</span></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="index.html" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="instruments.html" class="menu__link">Online Course</a></li>
							<li class="menu__item"><a href="shops.html" class="menu__link">Find Near By Shops</a></li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Account <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="login.html">Log In</a></li>
									<li><a href="signup.html">Sign Up</a></li>
								</ul>
							</li>
							<li class="menu__item menu__item--current"><a href="mail.html" class="menu__link">Mail Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3l_breadcrumbs_left">
				<h2></h2>
			</div>
			<div class="w3_agile_breadcrumbs_right">
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<div class="alert alert-success" role="alert">
					<strong>Well done!</strong>
<?php
$sname=$_POST['Name'];
$semail=$_POST['Email1'];
$remail=$_POST['Email2'];
$subject=$_POST['Subject'];
$message=$_POST['Message'];
mail($remail,$subject,$message);
echo"Your mail has been sent Successfully!";
?>
</div>

	<div class="breadcrumbs">
		<div class="container">
			<div class="w3l_breadcrumbs_left">
				<h2> </h2>
			</div>
			<div class="w3_agile_breadcrumbs_right">
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

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
			 <p> </a></p>
		</div>
	</div>
<!-- //copy-right -->
<!-- bootstrap-pop-up -->
	
<!-- //bootstrap-pop-up -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>


