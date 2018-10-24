
<?php
	$username=$_POST['username'];
	$password=$_POST['password'];


	$connect=pg_connect("host=localhost dbname=kedar user=kedar password=kedar")or die("Unable to connect");
	$query="select email,password from users;";
	$query1="select count(*) from users;";
	

	$r1=pg_query($connect,$query) or die("Unable to trace query");
	$r2=pg_fetch_all($r1);
	$r3=pg_query($connect,$query1) or die("Unable to trace query");
	$r4=pg_fetch_all($r3);
	$count=$r4[0][count];


	/*
	if($username==$r2[0][email] && $password==$r2[0][password])
	{
		echo"Valid user";
		echo "$r6";
	$query2="select fname from users where email='$username';";
	$r5=pg_query($connect,$query2) or die("Unable to trace query");
	$r6=pg_fetch_all($r5);
	echo $r6[0][fname];
	echo "\nflow";
	}
	else
		echo"Invalid User";
	*/
		
	if(!$r2==NULL)
	{
		for($i=0; $i<=$count; $i++)
		{
			if($username==$r2[$i][email] && $password==$r2[$i][password])
			{

				$query2="select fname from users where email='$username';";
				$r5=pg_query($connect,$query2) or die("Unable to trace query");
				$r6=pg_fetch_all($r5);
				$name1=$r6[0][fname];
				$query3="select user_id from users where email='$username';";
				$r7=pg_query($connect,$query3);
				$r8=pg_fetch_all($r7);
				$logid=$r8[0][user_id];
				session_start();
				$_SESSION[loginid]=$logid;
				echo"<script>alert('Login Successful. Welcome $name1');  window.location='http://localhost/MusicAcademy/index.html' </script>";
				break;
			}
		}
		echo"<script>alert('Incorrect Username Or Password '); window.location='http://localhost/MusicAcademy/login.html' </script>";
	}
	else
	{
		echo"No Record Found";
	}

?>
