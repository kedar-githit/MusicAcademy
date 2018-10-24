<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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

</head>
	
<body>
<form id="form2" method="POST">

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
		
	</div>
<!-- //breadcrumbs -->
			<div class="container">
			
				<h1 style="padding-top: 2%; padding-bottom: 2%;" >
					<a href="" onclick="history.back()"  ><span class="label label-default"> <- Go back</span></a>
				</h1>
			</div>
<!-- music -->
	<div class="about w3_music">
		<div class="container">
		<?php 
			session_start();
			$_SESSION['instrument']=$_GET["instrument1"];
			if($_SESSION[instrument] == "piano")
			{
				$_SESSION[count_piano]=$_SESSION[count_piano]+1;
			}
			else if($_SESSION[instrument] == "guitar")
			{
				$_SESSION[count_guitar]=$_SESSION[count_guitar]+1;
			}
			else if($_SESSION[instrument] == "bongo")
			{
				$_SESSION[count_bongo]=$_SESSION[count_bongo]+1;
			}

		?>
			<h3 class="agileits_w3layouts_head">SurSaptak <span>Online</span> Course</h3>
			<p class="w3_agileits_para">We offer lessons in three categories</p>

			

			<div class="wthree_latest_albums_grids">
				<div class="cntl"> <span class="cntl-bar cntl-center"> <span class="cntl-bar-fill"></span> </span>
					<div class="cntl-states">
						<div class="cntl-state">
							<div class="cntl-content">
								<h4>BEGINNER LEVEL</h4>
								<p>Includes:</p>
								<li>History of the instrument you select.</li><li>Basic information about it.</li><li>Music lessons for Beginners.</li>
							</div>
							<div class="cntl-image">
								<a href="lessonlist.php?level=beginner" ><img src="images/<?php echo $_SESSION['instrument'];?>1.jpg" alt=" " class="img-responsive" /></a>
								<div class="w3ls_cntl_image_pos">
									<p>Beginner Level</p>
								</div>
							</div>
							<div class="cntl-icon cntl-center">01</div>
						</div>
						<div class="cntl-state">
							<div class="cntl-content">
								<h4>Intermediate Level</h4>
								<p>Includes:</p>
								<li>Brefing about</li><li>Lessons for Intermediate level.</li><li>Music lessons for Intermediates.</li>
							</div>
							<div class="cntl-image w3_cntl_image">
							<a href="lessonlist.php?level=intermediate"><img src="images/<?php echo $_SESSION['instrument'];?>2.jpg" alt=" " class="img-responsive" /></a>
							<div class="w3ls_cntl_image_pos">
								<p>Intermediate Level</p>
							</div>
							</div>
							<div class="cntl-icon cntl-center">02</div>
						</div>
						<div class="cntl-state">
							<div class="cntl-content">
								<h4>Expert level</h4>
								<p>Includes:</p><li>Brefing  about Lessons for Expert Level.</li><li>Music Lessons for Experts.</li>
							</div>
							<div class="cntl-image">
								<a href="lessonlist.php?level=expert"><img src="images/<?php echo $_SESSION['instrument'];?>3.jpg" alt=" " class="img-responsive" /></a>
								<div class="w3ls_cntl_image_pos">
									<p>Expert Level</p>
								</div>
							</div>
							<div class="cntl-icon cntl-center">03</div>
						</div>
						<div class="cntl-state">
							<div class="cntl-content">
								<h4>Once you complete all our online courses successfully</h4>
								<p>You can learn the remaining lessons and master that instrument from our trusted Music Academys.<br> Just click on link below and you'll get all the information you want.</p><br><br>
								<li><a href="map.html"><b>Find Music Academy</b></a></li>
							</div>
							<div class="cntl-image">
								<img src="images/2.jpg" alt=" " class="img-responsive" />
								<div class="w3ls_cntl_image_pos">
									<p>It seems Interesting!!!</p>
								</div>
							</div>
							<div class="cntl-icon cntl-center">04</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
<!-- //music -->
<!-- music-bottom -->
	
<!-- //music-bottom -->
<!-- events -->
	
<!-- //events -->
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
<!-- //copy-right -->
<!-- bootstrap-pop-up -->
<!-- //bootstrap-pop-up -->
<!-- timeline -->
	<script type="text/javascript" src="js/jquery.cntl.js"></script> 
	<script type="text/javascript">
		$(document).ready(function(e){
			$('.cntl').cntl({
				revealbefore: 300,
				anim_class: 'cntl-animate',
				onreveal: function(e){
					console.log(e);
				}
			});
		});
	</script>
<!-- //timeline -->
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
</form>
</body>
</html>
