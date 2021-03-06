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
	<script>
		function SetInstrument(a)
		{
			
			if(a==1)
			{
				document.getElementById("form1").action="music.php?instrument1=piano";
				
			}
			else if(a==2)
			{
				document.getElementById("form1").action="music.php?instrument1=guitar";
				
			}
			else if(a==3)
			{
				document.getElementById("form1").action="music.php?instrument1=bongo";
				
			}

			document.getElementById("form1").submit();
			<?php 
			session_start();
			if($_SESSION[loginid] == null)
			{
				
				//echo"alert('You need to login to proceed');  window.location='http://localhost/MusicAcademy/login.html'";
				echo"alert('You need to login to proceed');";
				echo"window.location='http://localhost/MusicAcademy/login.html'";
			}
			?>
		}
	</script>
	<!-- <script>
				function check()
		{
			if(<?php echo $_SESSION[loginid]; ?> == null)
			{
				//window.location='http://localhost/MusicAcademy/login.html'
				<?php echo"<script> window.location='http://localhost/MusicAcademy/login.html' </script>"; ?>
			}
			else
			{
				<?php echo"<script> window.location='http://localhost/MusicAcademy/logout.php' </script>"; ?>
			}
		}
	</script> -->


</head>
	
<body>

<form Id="form1" method="POST">

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
							<li class="menu__item menu__item--current"><a href="instruments.html" class="menu__link">Online Course</a></li>
							<li class="menu__item"><a href="shops.html" class="menu__link">Find Near By Shops</a></li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Account <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="login.html">Log In</a></li>
									<!-- <li><a><input type ="button" style="border-color: transparent; background-color: transparent;" onclick="check()">
									<script> <?php if($_SESSION[loginid] == null) { $status="Log In";} else {$status="Log Out";} ?> </script> <?php echo $status; ?></input></a></li> -->
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

		<div class="breadcrumbs">

		<div class="container">
			<div class="w3l_breadcrumbs_left"><p><h2>Select the instrument you want to learn.</h2></p>
			</div>
			<div class="w3_agile_breadcrumbs_right" >
			</div>

		</div>
	</div>

			<div class="container">
			
				<h1 style="padding-top: 2%; padding-bottom: 2%;" >
					<a href="" onclick="history.back()"  ><span class="label label-default"> <- Go back</span></a>
				</h1>
			</div>



<div class="banner-bottom" >

		<div class="col-md-3 agileits_w3layouts_banner_bottom_grid" style="margin-left: 80px; border-left-style: solid; border-left-width: 5px; border-color: #3fc8ef; border-top-width: 5px; border-top-style: solid;border-right-width: 5px;border-right-style: solid;border-bottom-width: 5px;border-bottom-style: solid; border-bottom-width: 5px; margin-top:5%; ">
			<div class="hovereffect">
				<img src="images/piano.jpg" alt=" " class="img-responsive" />
				<div class="overlay">
					

				</div>
			</div>

			<div class="agileinfo_banner_bottom_grid">
				<div class="agileits_banner_bottom_grid1" >
					<h3>Electric Piano</h3>
					<button class="btn btn-default" type="button" onclick="SetInstrument('1')" > Learn Now</button>
					
				</div>
			</div>
		</div>

				<div class="col-md-3 agileits_w3layouts_banner_bottom_grid" style="margin-left: 60px; border-left-style: solid; border-left-width: 5px; border-color: #f74c4c; border-top-width: 5px; border-top-style: solid;border-right-width: 5px;border-right-style: solid;border-bottom-width: 5px;border-bottom-style: solid; border-bottom-width: 5px; margin-top:5%;">
			<div class="hovereffect">
				<img src="images/guitar.jpg" alt=" " class="img-responsive" />
				<div class="overlay" >
					
					
				</div>
			</div>
			<div class="agileinfo_banner_bottom_grid w3l_banner_bottom1">
				<div class="agileits_banner_bottom_grid1">
					
					<h3>Acoustic Guitar</h3>
					<button class="btn btn-default" type="button" onclick="SetInstrument('2')"> Learn Now</button>
				</div>
			</div>
		</div>

				<div class="col-md-3 agileits_w3layouts_banner_bottom_grid" style="margin-left: 60px; border-left-style: solid; border-left-width: 5px; border-color: #3fc8ef; border-top-width: 5px; border-top-style: solid;border-right-width: 5px;border-right-style: solid;border-bottom-width: 5px;border-bottom-style: solid; border-bottom-width: 5px; margin-top:5%;">
			<div class="hovereffect">
				<img src="images/bongo.jpg" alt=" " class="img-responsive" height="184.367px" />
				<div class="overlay">
					
					
				</div>
			</div>
			<div class="agileinfo_banner_bottom_grid" >
				<div class="agileits_banner_bottom_grid1">
					<h3 >Bongo</h3>
					<button class="btn btn-default" type="button" onclick="SetInstrument('3')"> Learn Now</button>
				</div>
			</div>
		</div>
	</div>


		<div class="breadcrumbs">
			<div class="container">
			<div class="w3l_breadcrumbs_left">
			</div>
			<div class="w3_agile_breadcrumbs_right">
				
			</div>

		</div>
		</div>


		<div class="breadcrumbs">
		<div class="container">
			<div class="w3l_breadcrumbs_left">
			</div>
			<div class="w3_agile_breadcrumbs_right">
				
			</div>

		</div>
	</div>



<div class="banner-bottom">
		<div class="col-md-3 wthree_banner_bottom_grid" style="margin-left: 460px " >
			<div class="wthree_banner_bottom_grid1" >
				<img src="images/1.jpg" alt=" " class="img-responsive" height="auto" />
				<div class="wthree_banner_bottom_grid_pos">
					<h4><span>More Instruments Coming Soon!!</span></h4>
			
			</div>
			</div>
		</div>

		</div>

				<div class="breadcrumbs">
		<div class="container">
			<div class="w3l_breadcrumbs_left">
			</div>
			<div class="w3_agile_breadcrumbs_right">
				
			</div>

		</div>
	</div>

		<div class="breadcrumbs">
		<div class="container">
			<div class="w3l_breadcrumbs_left">
			</div>
			<div class="w3_agile_breadcrumbs_right">
				
			</div>

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
			 <p> </p>
		</div>
	</div>


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
</form>
</body>
</html>

