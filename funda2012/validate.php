<?php 

session_start();
require("require/constants.php");
require("require/functions.php");

	if($_POST['skip']==-1){
	$username=mysql_escape_string($_SESSION['username']);
	$connection=createConn();
	$sql_query="select answers from googlockusers WHERE username='$username'";
	$temp=mysql_query($sql_query,$connection) or die("asdas");
	$corr_ans=mysql_fetch_array($temp);
	$corr_ans2=strtolower($corr_ans['answers']);
	$corr_ans2=$corr_ans2."SKIPPED".';';
$sql_query="UPDATE googlockusers SET answers ='$corr_ans2' WHERE username = '$username'";
				$temp=mysql_query($sql_query,$connection) or die("UPDATE QUERY");
	
	update($connection,$username);
	
	finish($connection);
	header("Location: play.php");
	}

	elseif($_POST['answer']==""){
	
	header("Location:play.php?attempt=incorrect");
	}

	else{
	$username=mysql_escape_string($_SESSION['username']);
    $answer=strtolower($_POST['answer']);
	
	$connection=createConn();
	$sql_query="select completed from googlockusers where username='$username'";
	//lock
	put_lock($connection,"googlockusers","read");
	$temp=mysql_query($sql_query,$connection) or die("ss");
	remove_lock($connection);
	//unlock
	
	$no2=mysql_fetch_array($temp);
	$no=mysql_real_escape_string($no2['completed']);//sessionno holds the next question no
	$no=$no+1;
	$sql_query="select answers from googlockusers WHERE username='$username'";
	$temp=mysql_query($sql_query,$connection) or die("asdas");
	$corr_ans=mysql_fetch_array($temp);
	$corr_ans2=strtolower($corr_ans['answers']);
	$corr_ans2=$corr_ans2.$answer.';';
$sql_query="UPDATE googlockusers SET answers ='$corr_ans2' WHERE username = '$username'";
				$temp=mysql_query($sql_query,$connection) or die("UPDATE QUERY");
				
		
	
	
	
	
	

//echo "no: $no ;$corr_ans2 and $answer and $_POST[answer]";
	
	
	
	
		
		
	
		update($connection,$username);
		
		storetimestamp($connection,$username);
	
	
	
	
	}
	finish($connection);
	
	header("Location: play.php");
		
	
	
?>