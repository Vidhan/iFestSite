<?php
	require_once("require/constants.php");
	function createConn(){
		global $database,$address,$user_priv,$db_password;
		$connection=mysql_connect($address,$user_priv,$db_password) or die("Unable to connect to database");
		$database2=mysql_select_db($database,$connection);
		return $connection;
	}

	function update($connection,$username){
	
		$sql_query="UPDATE googlockusers SET completed = completed+1 WHERE username = '$username'";
		//lock
		put_lock($connection,"googlockusers","write");
		$temp=mysql_query($sql_query,$connection) or die("UPDATE QUERY");
		remove_lock($connection);
		
		//unlock
		
		
	}

	function finish($connection){
	mysql_close($connection);	
	}
	
	function incrementscore($connection,$username){
		
		$sql_query="UPDATE googlockusers SET score=score+10 WHERE username='$username'";
		//lock
		put_lock($connection,"googlockusers","write");
		$temp=mysql_query($sql_query,$connection) or die("Error in updating score!");
		remove_lock($connection);
		//unlcok
	}
	
	function storetimestamp($connection,$username){
		$timestamp=time();
		$sql_query="UPDATE googlockusers SET timed=$timestamp where username='$username'";
		
		//lock
		put_lock($connection,"googlockusers","write");
		$temp=mysql_query($sql_query,$connection) or die("ERROR IN UPDATING TIMESTAMP");
		remove_lock($connection);

		//unlock
		
	}
	
	function put_lock($connection,$table,$privilege){
	
		$sql_query="LOCK TABLES ". $table . $privilege;
		$temp=mysql_query($sql_query,$connection);
		
	}
	
	function remove_lock($connection){
		$sql_query="UNLOCK TABLES";
		$temp=mysql_query($sql_query,$connection);
	
	}	
	
	function increment_skip($connection,$username){
				
		$sql_query="UPDATE googlockusers SET skipped=skipped+1 WHERE username='$username'";
		
		//lock
		put_lock($connection,"googlockusers","write");
		$temp=mysql_query($sql_query,$connection);
		remove_lock($connection);
		//unlock	
	
	
	}
	
	
?>