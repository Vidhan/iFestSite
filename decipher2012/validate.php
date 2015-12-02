<?php 

session_start();
require("require/constants.php");
require("require/functions.php");

	if($_POST[skip]==-1){
	$username=mysql_escape_string($_SESSION['username']);
	$connection=createConn();
	
	update($connection,$username);
	increment_skip($connection,$username);
	finish($connection);
	header("Location: play.php");
	}

	elseif($_POST[answer]==""){
	
	header("Location:play.php?attempt=incorrect");
	}

	else{
	$username=mysql_escape_string($_SESSION['username']);
    $answer=strtolower($_POST[answer]);
	
	$connection=createConn();
	$sql_query="select completed from googlockusers where username='$username'";
	//lock
	put_lock($connection,"googlockusers","read");
	$temp=mysql_query($sql_query,$connection) or die("ss");
	remove_lock($connection);
	//unlock
	
	$no2=mysql_fetch_array($temp);
	$no=mysql_real_escape_string($no2[completed]);//sessionno holds the next question no
	$no=$no+1;
	$sql_query="select answer from googlockquestions WHERE no='$no'";
	$temp=mysql_query($sql_query,$connection) or die("asdas");
	$corr_ans=mysql_fetch_array($temp);
	$corr_ans2=strtolower($corr_ans[answer]);
	

//echo "no: $no ;$corr_ans2 and $answer and $_POST[answer]";
	$corr_ans2=explode(";",$corr_ans2);
	$counter=count($corr_ans2)-1;
	
	for( ;$counter>=0;$counter-=1){
		
		
	if( strcmp($corr_ans2[$counter],$answer)==0){
		update($connection,$username);
		incrementscore($connection,$username);
		storetimestamp($connection,$username);
		break;
	}
	
	
	}
	finish($connection);
	if($counter==-1){
			header("Location:play.php?attempt=incorrect");
	}
	else
	header("Location: play.php");
	}
	
	
	
?>