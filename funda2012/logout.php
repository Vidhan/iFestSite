<?php session_start();
session_unset();
session_destroy();
setcookie("PHPSESSID",0,time()-1);
setcookie("username",0,time()-200);
setcookie("time",0,time()-200,"/");
unset($_COOKIE["time"]);
unset($_COOKIE["username"]);
header("Location: index.php");
?>

