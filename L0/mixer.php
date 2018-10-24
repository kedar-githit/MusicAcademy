<!DOCTYPE html>
<html>
<head>
	<title></title>
<script>
	function mix()
	{
		document.getElementById("form1").src="http://localhost//MusicAcademy/login.php"
	}
	var snd = new Audio("music.mp3");

</script>
</head>
<body>
<button id="loop1" src="music.mp3">Loop1</button> 
<button id="loop2" onclick="snd.play()">Loop2</button> 
<button id="loop3" >Loop3</button> 
</body>
</html>