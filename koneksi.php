<?php
	$xhost= "192.168.10.250";
	$xuser= "a111508854";
	$xpass = "";
	$xdb  = "a111508854";
	
	$con = mysql_connect($xhost,$xuser,$xpass);
	/*
	if($con)
	{
		echo"<h1>Connection Succeess</h1>";
	}*/
	
	$dbak= mysql_select_db($xdb,$con);
	/*
	if($dbak)
	{
		echo"<h1>DB Active</h1>";
	}
	*/
?>