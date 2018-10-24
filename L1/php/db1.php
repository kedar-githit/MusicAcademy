<?php

function getMaxId()
{
	$con = pg_connect("host=localhost dbname=postgres user=kedar");
	$sql="select max(uid) from user_details;";	
	$result = pg_query($sql); 
	$row = pg_fetch_array($result);
        return $row[0];
}
?>
