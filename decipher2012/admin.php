<?php
session_start();

if( isset($_COOKIE["username"]) && isset($_SESSION['username']) &&  $_COOKIE["username"]==$_SESSION['username'] && $_SESSION['username']=="superuser"){
			
}

else{
session_destroy();
setcookie("username","a",time()-1000);
header("Location: index.php");
}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Admin</title>
<link rel="shortcut icon" href="images/favicon.ico"/>
</head>
<body>
<form id="form1" method="post" action="submit.php">
  <p>
  Start Time (DD-MM-YY-HH-MinM): 
    <label>
    <input name="start_date" type="text" size="2" maxlength="2" />
    </label>
    <label>
    <input name="start_month" type="text" size="2" maxlength="2" />
    </label>
    <label>
    <input name="start_year" type="text" size="4" maxlength="4" />
    </label>
    <label>
    <input name="start_hour" type="text" size="2" maxlength="2" />
    </label>
    <label>
    <input name="start_min" type="text" size="2" maxlength="2" />
    </label>
  </p>
  <p>Finish Time (DD-MM-YY-HH-MM): 
    <label>
    <input name="finish_date" type="text" size="2" maxlength="2" />
</label>
    <label>
    <input name="finish_month" type="text" size="2" maxlength="2" />
    </label>
    <label>
    <input name="finish_year" type="text" size="4" maxlength="4" />
    </label>
    <label>
    <input name="finish_hour" type="text" size="2" maxlength="2" />
    </label>
    <label>
    <input name="finish_min" type="text" size="2" maxlength="2" />
    </label>
</p>
	<p>Please ensure that 24 hour convention is used</p>
  <p>Server Time when this page was created: <?php echo @date('d-m-Y \a\t\ H:i' )?></p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Submit" />
    </label>
    <label><a href="logout.php">Logout</a></label>
    <label>
    <input type="submit" name="Submit3" value="Clear" />
    </label>
  </p>
</form>


