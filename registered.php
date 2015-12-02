<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
$time = localtime(time(), true);
$query = "";

$name = trim($_GET['name']);
$gender = trim($_GET['gender']);
$institute = trim($_GET['institute']);
$designation = trim($_GET['designation']);
$membership = trim($_GET['membership']);
$ieeeno = trim($_GET['ieeeno']);
$address = trim($_GET['address']);
$city = trim($_GET['city']);
$pin = trim($_GET['pin']);
$email = trim($_GET['email']);
$phone = trim($_GET['phone']);
if(isset($_GET['ibot']) && $_GET['ibot']=='ibot')
$ibot='Yes' ;
else
$ibot='No';
if(isset($_GET['ielectro']) && $_GET['ielectro']=='ielectro')
$ielectro='Yes' ;
else
$ielectro='No';
if(isset($_GET['iapp']) && $_GET['iapp']=='iapp')
$iapp='Yes' ;
else
$iapp='No';
if(isset($_GET['ivision']) && $_GET['ivision']=='ivision')
$ivision='Yes' ;
else
$ivision='No';
if(isset($_GET['b2b']) && $_GET['b2b']=='b2b')
$b2b='Yes' ;
else
$b2b='No';
if(isset($_GET['icode']) && $_GET['icode']=='icode')
$icode='Yes' ;
else
$icode='No';
if(isset($_GET['idatadesign']) && $_GET['idatadesign']=='idatabase')
$idb='Yes' ;
else
$idb='No';
if(isset($_GET['idebug']) && $_GET['idebug']=='C Up Your Skills/idebug')
$ibug='Yes' ;
else
$ibug='No';
if(isset($_GET['irubble']) && $_GET['irubble']=='irubble')
$irubble='Yes' ;
else
$irubble='No';
if(isset($_GET['iart']) && $_GET['iart']=='iart')
$iart='Yes' ;
else
$iart='No';
if(isset($_GET['imaze']) && $_GET['imaze']=='imaze')
$imaze='Yes' ;
else
$imaze='No';
if(isset($_GET['iquiz']) && $_GET['iquiz']=='iquiz')
$iquiz='Yes' ;
else
$iquiz='No';
if(isset($_GET['ipapyrus']) && $_GET['ipapyrus']=='ipapyrus')
$ipapyrus='Yes' ;
else
$ipapyrus='No';
if(isset($_GET['ivideo']) && $_GET['ivideo']=='ivideo')
$ivideo='Yes' ;
else
$ivideo='No';
if(isset($_GET['th']) && $_GET['th']=='th')
$th='Yes' ;
else
$th='No';
if(isset($_GET['idesign']) && $_GET['idesign']=='idesign')
$idesign='Yes' ;
else
$idesign='No';
if(isset($_GET['icapture']) && $_GET['icapture']=='icapture')
$icapture='Yes' ;
else
$icapture='No';
if(isset($_GET['idecipher']) && $_GET['idecipher']=='idecipher')
$idecipher='Yes' ;
else
$idecipher='No';
if(isset($_GET['ifunda']) && $_GET['ifunda']=='ifunda')
$ifunda='Yes' ;
else
$ifunda='No';
if(isset($_GET['arduino']) && $_GET['arduino']=='Arduino Mela')
$arduino='Yes' ;
else
$arduino='No';
if(isset($_GET['sixsense']) && $_GET['sixsense']=='SixthSense Botz')
$ss='Yes' ;
else
$ss='No';
if(isset($_GET['arduinow']) && $_GET['arduinow']=='arduinow')
$arduinow='Yes' ;
else
$arduinow='No';
$time = date("l, j F Y [h:i a]");

//validity check at server side
if((strlen($name) == 0) || (strlen($institute) == 0) || (strlen($email) == 0)  || (strlen($gender) == 0) || $phone=='+91-9413880009')
	die("Invalid Entry. Register again, <a href='register.php'>here</a>.");
$handle = mysql_connect("localhost","ieee","reset123")
or die("Connection Failed.");
$dbname = "ieee";

mysql_select_db($dbname,$handle);
$table = "ifest";


$query="INSERT into $table values (NULL,'$name','$gender','$institute','$designation','$address','$city','$pin','$phone','$email','$membership','$ieeeno',NULL,'$ibot','$ielectro','$iapp','$ivision','$b2b','$icode','$idb','$irubble','$iart','$imaze','$iquiz','$ipapyrus','$ivideo','$th','$idecipher','$ifunda','$arduino','$ss','$ibug','$idesign','$icapture','$arduinow','$time')";
mysql_query($query) or die(mysql_error());


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>I.Fest 2012 | Registration Status</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/CabinSketch_700.font.js"></script>
<script type="text/javascript" src="js/EB_Garamond_400.font.js"></script>
<link rel="shortcut icon" href="favicon.ico"/>
<style type="text/css" media="all">
	
	div#content{
		margin:0; 
		padding:5px; 
		border: #999999 dashed 1px;}
		
	a.print:after{	/* URL will be shown next to link name */
				/* write full URL in href attribute, bcoz whatever is written there will be printed exactly, base tag will not be printed*/
		content:": (" attr(href) ") ";
		display: inline;
		color: #666666;}
		
	.error {
		color: #666666;}
	span {
		font-weight: bold;}
	fieldset {
	  width: 350px;}
	.inputHighlighted {
	 /* width: 200px;*/
	  background-color: #FFCE31;
	  color: #000;
	  border: 1px solid #000;}
	td{	
		border-bottom:1px solid black;}
	table.receipt td{	
		border-bottom:1px dotted #000;}
	table.receipt th{	
		text-align:left;}
</style>
</head>
<!-- [if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">
.bg {behavior:url(js/PIE.htc)}
</style>
<![endif]-->
<!-- [if lt IE 7]>
<div style='clear:both;text-align:center;position:relative'>
	<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
</div>
<![endif]-->

<body id="page2">
<div class="main">
<!-- header -->
	<header>
		<div class="wrapper">
			<nav>
				<ul id="menu">
					<li><a href="index.html"><span>H</span>ome</a></li>
					<li><a href="about.html"><span>A</span>bout</a></li>
                    <li><a href="events.html"><span>E</span>vents</a></li>
					<li id="menu_active"><a href="register.php"><span>R</span>egister</a></li>
					<li><a href="sponsors.html"><span>S</span>ponsors</a></li>
					<li><a href="coordinator.html"><span>C</span>oordinators</a></li>
					<li><a href="reach.html"><span>R</span>each Us</a></li>
				</ul>
			</nav>
		</div>
		<h1><a href="index.html" id="logo" style="margin-top:-60px; margin-left:20px;">I.Fest 2012</a><br/></h1>
             <a href="http://www.daiict.ac.in/daiict/index.html" target="_blank"><img src="images/DAIICT.png" style="float:left;margin-top:-350px; "/></a>
    <a href="http://ieee.daiict.ac.in/ieee2012/index.php" target="_blank"><img src="images/ieee.png" style="float:right;margin-top:-340px;"/></a></header>
<!-- / header -->
<!-- content -->
	<section id="content">
		<div class="wrapper">
			<article class="col1">
			<br/> <br/> <br/><br/> <br/> <!-- additional breaks -->
		

	

			<div align = "center"><h3>IEEE Student Branch, DA-IICT<br /><br />Registration Confirmation</h3></div>
			
			<p>Congratulations! you have successfully registered for <i>i.fest (5th - 7th October, 2012)</i>. We'll be glad to have you present.</p>
			<p>Details submitted by you are as following:</p>
			
			<div align="center" class="contentarea">
				<form id="form" method="post" action="registered.php">
					<table>
					<tr>
						<td>Registration ID</td>
						<td><?php 
							$result = mysql_query("select * from ".$table." where name='".$name."' AND institute='".$institute."' order by timestamp") or die(mysql_error());
							while($row = mysql_fetch_array($result))
								$final_row = $row;	//in case of multiple name and institutes, get last one
							echo($final_row['id']);
							?></td>
					</tr>
                    <tr>
                      <td width="200px">Name</td>
                      <td><?php echo($name); ?> </td>
                    </tr>
                    <tr>
                      <td>Institution/Organization</td>
                      <td><?php echo($institute); ?> </td>
                    </tr>
                    <tr>
                      <td>Membership</td>
                      <td>	<?php	if($designation == 'IEEEMember') 
					  					echo($ieeeno); 
									else if($membership == 'yes')
										echo("yes");
									else
										echo("no");
							?> </td>
                    </tr>
					<tr>
                      <td>Registration Fee</td>
                      <td>	<?php	if($designation == 'IEEEMember') 
					  					echo("Rs 50 only"); 
									else if($membership == 'yes')
										echo("Rs 1350+50 only");
									else
										echo("Rs 100 only");
							?> </td>
                    </tr>
                    <tr>
                      <td>Email Address </td>
                      <td><?php echo($email); ?> </td>
                    </tr>
                    <tr>
                      <td>Phone </td>
                      <td><?php echo($phone); ?> </td>
                    </tr>
					
                </table>
				</form>
			</div>
			<p>You would be contacted soon by our coordinators to confirm your registration by phone or email. For any queries regarding registrations contact the following:</p>
            <ul><li><h3>Ankit Naugariya </h3>
						<p>9723880075</p></li>
                <li><h3>Om Thakkar<br/>
</a></h3>
						<p>9904014373</p></li>
                <li><h3>Vani Alamkrutha</h3>
						<p>9173184984</p></li>
			
			<?php	if($designation == 'IEEEMember') 
						echo("<p>Please bring your IEEE membership card at the time of fee payment, and at the workshop for verification.</p>"); 
					else
						echo("<p></p>");
			?>
			</article>
<article class="col2"><br/><br/><br/>
				<h3 class="latest">Latest News</h3><br/><br/><br/>
				<div id="lengthdiv" ><marquee direction="up" loop="true" scrollamount="4" height="300" onmouseover="this.stop();" onmouseout="this.start();"
>
<div style="height:40px">I.Fest from 5th to 7th October 2012.</div><br/><img src="images/line.png"/>
<div style="height:40px"><b>NOTE</b>:  Don't forget to collect your Participation Certificates during Prize Distribution ceremony<br/></div><br/><img src="images/line.png"/>

<div style="height:40px"><b>NOTE</b>:  Results of i-Database and i-Electro (Phase 1) are out!!!<br/></div><br/><img src="images/line.png"/>
<div style="height:40px"><b>NOTE</b>:  'Like' your favourite poster in 'i-Design' album at https://www.facebook.com/DAIICT.Ifest and help us select the best!</div>
               </marquee></div>
               <br/><br/>
				<h4 class="tweet">Facebook Updates</h4>
				<div >
					<iframe id="fbdiv"
src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F

%2Fwww.facebook.com

%2FDAIICT.Ifest&amp;width=292&amp;height=590&amp;colorscheme=light&amp

;
show_faces=true&amp;border_color=&amp;stream=true&amp;header=true

" scrolling="no" frameborder="0" style="border:none; overflow:hidden; 
width:280px; height:370px;" allowTransparency="false">
</iframe>
				</div>
    		</article>
		</div>
	</section>
<!-- / content -->
<!-- footer -->
	<footer>
    
		

		
	</footer>
<!-- / footer -->
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>
