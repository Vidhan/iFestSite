<?php 
session_start();
require_once("require/begun_or_not_scheme.php");
if( isset($_COOKIE["username"])==FALSE )
	{

		if( $_POST['Username']=="" || $_POST['Password']=="" ) //if time not event time hide the begin button and display the rules page 
		{
			header("Location: index.php");
		}

		else
		{
	
			require_once("require/constants.php");
			require_once("require/functions.php");
			$connection=createConn();
   
			$username=mysql_real_escape_string($_POST['Username']);
			$password=mysql_real_escape_string($_POST['Password']);
			//$password=md5($password);
			$sql_query="select username,password from googlockusers where username='$username' and password='$password'";
			$result=mysql_query($sql_query,$connection) ;
			//while( $row=mysql_fetch_array($result)){
			mysql_close($connection);
			$count=mysql_num_rows($result);
			if ($count==0)
			{
			
				header("Location: index.php?attempt=incorrect");
				unset($_COOKIE["username"]);
				exit;
			}
			$username=$_POST['Username'];
			//$password=md5($_POST['Password']);
		
			setcookie("username",$username);
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;	
			
			$set=1; 
			if($username=="superuser"){header("location: admin.php");}
		}
	}
		
	if( ($_COOKIE["username"]==$_SESSION['username']) || $set==1)
	{
		//allow the user to continue else
		//echo $_SESSION['username'];
		/*$file_pointer=fopen("validate","r") or die("Could not open validate");
			$file_contents=fread($file_pointer,filesize("validate"));
			if ( $file_contents=="no")
			$html="<title>Googlock is yet to begin!</title>";
			else
			$html="<title>Googlock has begun!</title>";
	
			fclose($file_pointer);
	
		*/
		if(isset($_SESSION['username']) && isset($_SESSION['password']))
		{
			if($_SESSION['username']=="superuser")
			{
				header("location.php");
			}
		}
	
		else
		{
			if (isset( $_COOKIE["username"]) == FALSE )
				echo "Please clear all cookies. If problem persists try using a different browser possibly Firefox";

			else //cookie exists but corresponding session does not, possible cookie forging	
				echo "Please clear all cookies. If problem persists try using a different browser possibly Firefox";
			exit;
		/*session_start();
		session_destroy();
		header("Location: index.php");
		exit;
		*/
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<script type="text/javascript" src="js/md5.js">
</script>
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<title>Be the first Decipher!</title>
	       <style type="text/css">
    .style10 {font-size:115%;}
	.style9 {color: #000000}
	.style13 {color: #000000; font-size:12px;}
.style11 {font-weight: bold}
.style12 {font-weight: bold;
          font-size:130%;}	
.style1
{
	color:#C00;
	text-decoration:none;
}
.style1:hover
{
	color:#00C;
	text-decoration:none;
}
	</style>
</head>
<body>
	<div id="content">
	<div id="logo1">
    <img width="350" height="70" src="images/logo.png"/>
    </div>
    <div id="logo2">
    <a href="http://ieee.daiict.ac.in/ifest" target="_blank"><img width="300" height="200" src="images/img2.png"/></a>
    </div>
    
    <div class="gboxtop"></div>
		<div class="gbox">
		  <p><span class="style10">
			  <marquee scrollamount="8" onMouseover="this.scrollAmount=0" onMouseout="this.scrollAmount=8"><strong1><span class="style10">Special Hints will be posted on <a href="https://www.facebook.com/events/107788559377559/110741812415567/?ref=notif&notif_t=plan_mall_activity" target=_blank">I.Decipher Facebook page</a>.</span></strong1>
			   </marquee>
		  </span>		</div>
		
		<div>
			<div id="left1">
			<h4 align="left">Welcome <?php echo $_SESSION['username']; ?></h4></div>
			<div id="center2"> 
			<h4 align="right"> Current Server Time: <?php echo @date('d-m-Y \,\ H:i' )?></h4>
			</div>
			<div id="right1" >
			<ul id="menu1">
			<li><a href="logout.php" class="current">Logout</a></li>
		
		</ul>
			</div>
			</div>
		    <p>&nbsp;</p>
			 <p>&nbsp;</p>
		    <p class="style9">Thank you for registering for the event and it's sure that you find lots of fun and excitement in this online entertainment extravaganza. Event details are present in the <a href="About.php">Rules</a> page. Please go through them before you start playing.</p>
		    <!--<p class="style9"> Phase-1 will start on 21st february 2011 at 9pm.</p>-->
			<p>&nbsp;</p>
			<?php echo "<strong> <span class='style5'>".(begun_or_not(0))."</strong></span>". "<br/>";  ?>
			
		  <tr>
                <td><input type="button" onclick="location.href='play.php'"  id="startgame" value="Start Game"/></td>
          </tr>
			</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			
			<p class="date"  style="font-size: 13px;"><a href="http://ieee.daiict.ac.in/ifest">Back to I.Fest</a></p>
		</div>
        
<div id="footer">
			
				<p align="center" class="style12">Dhirubhai Ambani Institute of Information and Communication Technology</p>
				<p align="center" class="style13">Design: Swena Gupta, Vidhan Agarwal</p>
		
			
		</div>
	</div>
</body>
</html>