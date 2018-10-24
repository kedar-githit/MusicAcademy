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

<?php 
session_start();

?>
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
							<li class="menu__item "><a href="instruments.php" class="menu__link">Online Course</a></li>
							<li class="menu__item"><a href="shops.html" class="menu__link">Find Near By Shops</a></li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Account <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="login.html">Log In</a></li>
									<li><a href="signup.html">Sign Up</a></li>
								</ul>
							</li>
							<li class="menu__item"><a href="mail.html" class="menu__link">Mail Us</a></li>
							<li class="menu__item menu__item--current"><a href="mail.html" class="menu__link">Reports</a></li>
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
<div class="container" style="margin-left: 40%">
<h2><a><span class="label label-primary">Report #1</span></a></h2>
</div>

<div class="container" >
				<div class="col-md-6 w3-agileits" style="margin-left : 23% ">
					<p style="padding-bottom: 10%;"><h1>Most popular instruments!</h1></p>
					<div class="list-group list-group-alternate" style="padding-top: 5%" > 
						<a class="list-group-item" style="font-size: 150%;"><span class="badge" style="font-size: 100%"">Ratings</span> <i class="ti ti-email"></i> <h3>Instruments </h3></a> 
						<a class="list-group-item" style="font-size: 120%;"><span class="badge badge-primary" style="font-size: 90%"><?php echo $_SESSION[count_piano];?></span> <i class="ti ti-eye"></i> Piano</a> 
						<a class="list-group-item" style="font-size: 120%;"><span class="badge badge-warning" style="font-size: 90%"><?php echo $_SESSION[count_guitar];?></span> <i class="ti ti-bookmark"></i> Guitar </a> 
						<a class="list-group-item" style="font-size: 120%;"><span class="badge badge-danger" style="font-size: 90%"><?php echo $_SESSION[count_bongo];?></span> <i class="ti ti-bell"></i> Bongo </a> 
					</div>
				</div>


</div>

<div class="container" style="margin-left: 40%; margin-top: 15%;" >
<h2><a><span class="label label-primary">Report #2</span></a></h2>
</div>


<div class="container">
			<div class="grid_3 grid_5 w3ls">
				<h3>On User Demand!</h3>
				<div class="alert alert-success" role="alert">
					<strong>Vote:</strong> Below are four upcoming instruments, but only one of them will be added. It was hard for us to decide which to go for, so we need your assistance.
					Vote the instrument you want us to add first.
					The most loved instrument will be selected.
				</div>
			</div>

			<div class="grid_3 grid_5 w3l">
				<h3 style="margin-bottom: -0.2%;">Vote here</h3>(Click on the instruments you want to vote)
				<div class="tab-content">
					<div class="tab-pane active" id="domprogress">
					<h1>
						<button class="label label-success" onclick="progress(1);">Cajon</button><br>
					</h1>
						<p style="font-size: 100%">Total Votes for Cajon.</p>
						<div class="progress">
							<div class="progress-bar progress-bar-success" style="width: <?php echo $_SESSION[cajon_prog];?>%"></div>
						</div>
					<br><br>
					<h1>
						<button class="label label-warning" onclick="progress(2);">Base Guitar</button><br>
					</h1>
						<p style="font-size: 100%">Total Votes for Base Guitar.</p>
						<div class="progress">
							<div class="progress-bar progress-bar-warning" style="width: <?php echo $_SESSION[bguitar_prog];?>%"></div>
						</div>
					<br><br>
					<h1>
						<button class="label label-danger" onclick="progress(3)">Flute</button><br>
					</h1>
						<p style="font-size: 100%">Total Votes for Flute.</p>
						<div class="progress">
							<div class="progress-bar progress-bar-danger" style="width: <?php echo $_SESSION[flute_prog];?>%"></div>
						</div>
					<br><br>
					<h1>
						<button class="label label-info" onclick="progress(4)">Tabla</button><br>
					</h1>
						<p style="font-size: 100%">Total Votes for Tabla.</p>
						<div class="progress">
							<div class="progress-bar progress-bar-inverse" style="width: <?php echo $_SESSION[tabla_prog];?>%"></div>
						</div>
						

					</div>
				</div>
			</div>

			<div class="container" style="margin-left: 40%; margin-top: 15%;" >
<h2><a><span class="label label-primary">Report #Upcoming</span></a></h2>
</div>
			<div class="grid_3 grid_5 w3ls">
				<div class="alert alert-warning" role="alert">
					<strong>Stay Tuned!</strong> More Interesting Reports Coming Your Way!
				</div>
				</div>

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
					<li><a href="www://www.instagram.com/sur.saptak" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span><i>-</i>Instagram</a></li>
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

	<script type="text/javascript">
	function progress(p)
	{
		if(p==1)
		{
			<?php $_SESSION[cajon_prog]=$_SESSION[cajon_prog]+1; ?>
		}
		else if(p==2)
		{
			<?php $_SESSION[bguitar_prog]=$_SESSION[bguitar_prog]+2; ?>
		}
		else if(p==3)
		{
			<?php $_SESSION[flute_prog]=$_SESSION[flute_prog]+0.7; ?>
		}
		else if(p==4)
		{
			<?php $_SESSION[tabla_prog]=$_SESSION[tabla_prog]+0.5; ?>
		}
		return (p);
	}
</script>

<!-- //here ends scrolling icon -->
</form>
</body>
</html>
