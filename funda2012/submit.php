<?php
session_start();
require_once("require/constants.php");
require_once("require/functions.php");
if( isset($_COOKIE["username"]) && isset($_SESSION['username']) &&  $_COOKIE["username"]==$_SESSION['username'] ){
	
	$start_timestamp=@mktime($_POST[start_hour],$_POST[start_min],0,$_POST[start_month],$_POST[start_date],$_POST[start_year]);
	$finish_timestamp=@mktime($_POST[finish_hour],$_POST[finish_min],0,$_POST[finish_month],$_POST[finish_date],$_POST[finish_year]);
	
	$connection=createConn();
	$sql_query="select * from googlockstart_end where no='0'";
	$temp=mysql_query($sql_query,$connection) or die("ERROR SUBMIT.PHP");
	
	$count=mysql_num_rows($temp);
	
	if( $count==0){
		$sql_query="insert into googlockstart_end values ( '0','$start_timestamp','$finish_timestamp')";
		$temp=mysql_query($sql_query,$connection) or die("ERROR SUBMIT.PHP");
		
	}
	else{
	$sql_query="UPDATE googlockstart_end SET start_timestamp=$start_timestamp where no='0'";
	$temp=mysql_query($sql_query,$connection) or die("ERROR SUBMIT.PHP");
	$sql_query="UPDATE googlockstart_end SET finish_timestamp='$finish_timestamp' where no='0'";
	$temp=mysql_query($sql_query,$connection) or die("ERROR SUBMIT.PHP");
	}
	
	mysql_close($connection);
	header("Location: admin.php");
}
else
	header("Location: index.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="images/favicon.ico"/>
<title>I.Decipher | I.Fest 2012</title>
</head>

<body>
</body>
</html>
