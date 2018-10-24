		function check()
		{
			if(<script type="text/php"> <?php $_SESSION[loginid] == null ?> </script>)
			{
				//window.location='http://localhost/MusicAcademy/login.html'
				<?php echo"<script> window.location='http://localhost/MusicAcademy/login.html' </script>"; ?>
			}
			else
			{
				<?php echo"<script> window.location='http://localhost/MusicAcademy/logout.php' </script>"; ?>
			}
		}