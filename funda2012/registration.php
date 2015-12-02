<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include("include/connection.php"); ?>
<?php include("include/function.php"); ?>
<?php 
	$message='';
	$enable=0;
	$flag1=0;
	$flag2=0;
    if(isset($_POST['submit']))
	{
       if(isset($_POST['Teamname']) && isset ($_POST['Teammember1']) && isset($_POST['passwd']) && isset ($_POST[ 'confpasswd']) && isset ($_POST[ 'contactno']))
	   {
           if(trim($_POST['Teamname'])!= '' && trim($_POST['Teammember1'])!='' && trim($_POST['passwd'])!=''&& trim($_POST['confpasswd'])!=''&& trim($_POST[ 'contactno'])!=''){
             $Teamname = trim(mysqlPrep($_POST['Teamname']));
             $Teammember1 = trim(mysqlPrep($_POST['Teammember1']));
             $passwd = trim(mysqlPrep($_POST['passwd']));
             $confpasswd = trim(mysqlPrep($_POST['confpasswd']));
             $contactno = trim(mysqlPrep($_POST['contactno']));
				if(isset($_POST[ 'emailid']))
				{
					$emailid = trim(mysqlPrep($_POST['emailid']));    
				}
				else 
				{
					$emailid = "";    
				}
			 $value=0;
				if(isset($_POST['check']))
					$value = $_POST['check'];
				
					if($value)
					{
						if(chklength($Teammember1))
						{
							$enable=1;    
						}
					}
					else 
					{
						$enable=1;            
					}
				
			 
				if($enable == 1)
				{    
					if($passwd == $confpasswd)
					{
						$hash_passwd= md5($passwd);
									if(chkEligibleNonDa($Teamname))
									{
								
										
																				
											$query= "INSERT INTO `googlockdareg` (`Teamname` ,`member1`,`password` ,`Contactno`,`emailid`)VALUES ('$Teamname',  '$Teammember1','$hash_passwd',  '$contactno', '$emailid')";
											$count= returnrows($query);
										
											$query3 = "INSERT INTO `googlockusers` (`username` ,`password` ,`completed` ,`score`)VALUES ('$Teamname',  '$hash_passwd', 0,0)";
											$count3= returnrows($query3);
											if($count3 && $count)
												$message = "Successfully Registered";                     
										
										else 
										{
											$message="Sorry registration is not successfully done. Kindly register again.";
										}
                            
									}
									else
									{
										$message = "The username is not available";                 
									}
						
						
					}
					else
					{
						$message = "Passwords did not match";             
					}
				}
				else 
				{
					$message = "Not a Valid DA-IICT ID";            
                }
           }
           else
		   {
               $message = "Few fields are left empty";
			}
       
	   }
       else
	   {
           $message = "Kindly refill the form, you left some of the mandatory fields.";
       }
    }

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<script type="text/javascript" src="js/md5.js">
</script>
	<!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> -->
	<title>I.Funda | I.Fest 2012</title>
    <style type="text/css">
	.style2 {color: #000000;
	font-size:16px}
    .style10 {font-size:115%;}
	.style9 {color: #000000}
	.style13 {color: #000000; font-size:12px;}
	.style20 {color: #000000; font-size:18px;}
.style11 {font-weight: bold}
.style12 {font-weight: bold;
          font-size:130%;}	
.style4 {color:#C00;
font-size:16px}
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
			  <marquee scrollamount="8" onMouseover="this.scrollAmount=0" onMouseout="this.scrollAmount=8"><strong1><span class="style10">All the best!!!</span></strong1>
			   </marquee>
		  </span>		</div>
		
     <ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="About.php">Rules</a></li>
			<li><a href="Contact.php">Contact Us</a></li>
			<li><a href="registration.php"  class="current">Registration</a></li>
		</ul>
        
     <div id="center1">
			 <h2 class="style11"> Register: </h3>
		  
		  <span  style="color:#000">
		  <?php
		  echo $message;
		  ?>
		  </span>
		   <form action="registration.php" method="post" class="style20">
						<span  style="color:#735313">*If you are a DAIICT student enter your ID in the Member Name.</span><br/><br/>
                        <input type="checkbox" id="check" name="check" value="1" style="margin-left:150px" /> &nbsp;Are you a Daiict student?</span><br />
                        <br/>
                        <div id="show">
								
                               <table style="margin-left:150px">
                               
                                    <tr>
                                        <td>Username*</span></td>
                                        <td><input type="text" id="Teamname" name="Teamname"/></td>
                                    </tr>
                                    <tr>
                                        <td>Member Name*</span></td>
                                        <td><input type="text" id="Teammember1" name="Teammember1"/></td>
                                    </tr>
                                     
                                    <tr>
                                        <td>Password*</span></td>
                                        <td><input type="password" id="passwd" name="passwd"/></td>
                                    </tr>
                                    <tr>
                                        <td>Confirm password*</span></td>
                                        <td><input type="password" id="confpasswd" name="confpasswd"/></td>
                                    </tr>
                                    <tr>
                                        <td>Contact no*</span></td>
                                        <td><input type="text" id="contactno" name="contactno"/></td>
                                    </tr>
                                    <tr>
                                        <td>Email id</span></td>
                                        <td><input type="text" id="emailid" name="emailid"/></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                   <tr>
                                       <td></td>
                                       <td style="float:right"><input type="submit" id="submit" name="submit" value="Register"/></td>
                                   </tr>
                                   
                               </table>
                                   
              </div>    
          </form>
		  
			
			
			<!--<p class="style9"><span class="style5">First Prize</span> : Rs.1500.</p>
			<p class="style9"><span class="style5">Second Prize</span> : Rs.1000. and </p>
			<p class="style9">Lots of<span class="style10"> consolation prizes</span>.</p>-->
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