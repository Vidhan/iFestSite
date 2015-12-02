<?php 
require("require/functions.php");
require("require/constants.php");
session_start();


if( isset($_COOKIE["username"]) && isset($_SESSION['username']) &&  $_COOKIE["username"]==$_SESSION['username'] ){
	/*$database='googlock';
	$connection=mysql_connect(localhost,"root","") or die("Unable to connect to database");
    $database=mysql_select_db($database,$connection);

	$sql_query="select questionimg from questions where no='$_SESSION[no]'";
	$temp=mysql_query($sql_query,$connection) or die("ERROR QUERY");
	$result=mysql_fetch_array($temp);
	if ( $result[questionimg] !=NULL){
		header("Content-type: image/jpeg"); // 'image/jpeg' for JPEG images
		echo "$result[questionimg]";
		
	}
	*/
	
	$connection=createConn();
	$username=$_SESSION['username'];
	$sql_query="select completed from googlockusers where username='$username'";
	
	//lock
	$temp=mysql_query($sql_query,$connection) or die("asda");
	//unlock
	mysql_close($connection);
	$result=mysql_fetch_array($temp);
	$result['completed']=$result['completed']+1;
	$imagepath=$secret_img_path. $result['completed'] .".jpg";
	if (  file_exists($imagepath) ){
	$image=imagecreatefromjpeg($imagepath);
		//header("Content-Type: image/jpeg"); NO NEED SINCE THIS WILL BE SENT BY THE HTML BROWSER(REMEMBER THIS SCRIPT WAS CALLED AS IMG SRC=" " 

	imagejpeg($image);
	imagedestroy($image);
	}
	
}
else{
	session_destroy();
	setcookie("username","a",time()-1000);
	header("Location: index.php");
	
	}


?>