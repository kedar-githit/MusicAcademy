<html>
<title>
	Login
</title>
<script type="text/javascript">
	function validate()
	{
		//Email-id
		var a = document.getElementsByName('email')[0].value;
		if(a=='')
		{
			alert("Please enter User id");
			document.getElementsByName('email')[0].focus();
			return false;
		}
		else if( !(/^\w+\@\w+\.([A-Za-z]{2,4})$/.test(a)) )
		{
			alert("Please enter valid User id");
			document.getElementsByName('email')[0].focus();
			return false;			
		}	
		
		//password
		a = document.getElementsByName('password')[0].value;
		if(a=='')
		{
			alert("Please enter Password");
			document.getElementsByName('password')[0].focus();
			return false;
		}
	}
</script>
<?php
	session_start();

	if((isset($_SESSION['email'])))
		echo "<script>location.href=\"home.php\"</script>";
?>
<body>
	<center>
		<form action="authenticate.php" method=POST onsubmit="return validate()">
			<i><b>User id:</b><input type=text name=email placeholder="Enter your Valid User Id"></input><br><br>
			<b>Password:</b><input type=password name=password placeholder="Enter your Password"></input><br><br>
			<input type=submit value=submit><br>
			<a href="signup.html">SignUp</a>&nbsp;<a href="forgotpassword.html">Forgot Password</a>
			
		</form>
	</center>
</body>
</html>
