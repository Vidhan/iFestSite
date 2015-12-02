<?php
session_start();
	require("require/begun_or_not_scheme.php");
	require("require/constants.php");
	require("require/functions.php");
	anadi_begun_or_not_scheme(); ////it will open a text file read the timestamp and check whether game has started or not
	// define any other scheme in begun_or_not_scheme.php
	
	
if( isset($_COOKIE["username"]) && isset($_SESSION['username']) &&  $_COOKIE["username"]==$_SESSION['username'] ){
	
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	
	$connection=createConn();
	
	$temp_usr=mysql_real_escape_string($username);
	$temp_pass=mysql_real_escape_string($password);
	$sql_query="select completed from users where username='$temp_usr' and password='$temp_pass'";
	$temp=mysql_query($sql_query,$connection) or die("ERROR QUERY");
	$result=mysql_fetch_array($temp);
	
	$result[completed]=$result[completed]+1;
	
	$_SESSION[no]=$result[completed];
	if( $result[completed] >=$no_of_questions) {
	//finished all the questions 
	$done=1;
	}
	
	$sql_query="select question from questions where no='$result[completed]'";
	$temp=mysql_query($sql_query,$connection) or die("Error in query");
	$question=mysql_fetch_array($temp);
	$sql_query="select username,score from users ORDER BY score desc limit 0, 5"; 
	$temp=mysql_query($sql_query,$connection);
	$no_of_records=mysql_num_rows($temp);
	
		
	
	for($i=0;$i<$no_of_records;$i++){
		//setcookie( either the cookie method in which a javascript is used to keep tab
		//else we can use a hidden form an check if the values are not null. if null this is the first time this form has been 
		//visited, keep a counter and after every 5 refreshes or so give fresh values.also note that after refresh the values are deleted therefore the php script has to check and set the values every time( no need to set fresh values, just the stale ones back again)
		}
		
	
	
	mysql_close($connection);
	if( isset($_COOKIE["time"]) ==false || strstr($_COOKIE["time"],"undefined") ){
			$raw_time=$duration-$diff;
			$hours=floor($raw_time/3600);
			$raw_time=$raw_time%3600;
			$minutes=floor($raw_time/60);
			$seconds=$raw_time%60;
			$to_send=$hours. ":" . $minutes . ":" . $seconds . ":";
			setcookie("time",$to_send);
		}
			
}

else{
	session_destroy();
	setcookie("username","a",time()-1000);
	header("Location: index.php");
	
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="play.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($done==1){ echo"You have shown excellent abilities. I confer you the next Googlock!";} else echo"You are on question: ". $_SESSION[no]. " HURRY!";?></title>

<script type="text/javascript" src="cookie_display.js">

</script>
  
</head>
<body onload="checkCookie('time')" onunload="setCookie()";>

<div class="tabs">
<ol id="navlinks">
<li><a href="rules.html"><img src="Rules.png"  /></a> </li>
<li><a href="logout.php"><img src="logout3.png" /></a></li>
</ol>
</div>
<div class="content">
	<img src="conan_doyle.gif" />
	
     
<table width="25%" border="1" cellspacing="2" cellpadding="2" id="leaderboard">
      <tr>
        <th width="82%" scope="row">Contestant</th>
        <td width="18%">Score</td>
    </tr>
    	<?php $first="<tr>
        <th scope=\"row\">";

for($i=0;$i<$no_of_records;$i++){
		$result=mysql_fetch_array($temp);
		//$result[1]+=1;
		//if($result[1]==8) $result[1]='completed';
		$display =$first . $result[0] . "</th> <td>" . $result[1] ."</td> </tr>";
		echo "$display";
		}
		
		?>
      <!--<tr>
        <th scope="row">&nbsp;</th>
        <td > &nbsp;</td>
      </tr>
      <tr>
        <th scope="row" >&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
      </tr> -->
    </table>

 <table width="15%" border="1" cellspacing="2" cellpadding="2" name="counter">
      <tr>
        <th scope="row">Time Left:</th>
        <td id="time_left">not set</td>
      </tr>
    </table>

  <form action="validate.php" method="post">
	<?php  if($done==1) {echo "<p><em>Congratulations: You truly are a Googlock!</em> </p>
	</form>
	</div>
</body>
</html>"; 
exit;
} 
else {echo "<p>Question $_SESSION[no]: $question[question] </p>";} if(isset($_GET["attempt"]) && $_GET["attempt"]=="incorrect") echo"Incorrect Username or Password";?> 
	<p><img src="img.php" /></p>
	
	<input name="answer" type="text" value=""  />
	<input name="skip" type="hidden" value="" id="skip"  />
	<input type="submit" value="Submit" />
	<input type="submit" value="Skip" onclick="document.getElementById('skip').value=-1">
	
	</form>
	


</form>  
</div>

</body>
</html>