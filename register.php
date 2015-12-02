<!DOCTYPE html>
<html lang="en">
<head>
<title>I.Fest 2012 | Register</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/CabinSketch_700.font.js"></script>
<script type="text/javascript" src="js/EB_Garamond_400.font.js"></script>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" media="screen"/>

<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>

<style type="text/css">
	form legend{
		font-weight:bold;
		}
	form td{
		padding:3px 0;
	}
</style>
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
</head>
<body id="page4">
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
    <a href="http://ieee.daiict.ac.in/ieee2012/index.php" target="_blank"><img src="images/ieee.png" style="float:right;margin-top:-340px;"/></a></header></header>
<!-- / header -->
<!-- content -->
	<section id="content">
		<div class="wrapper">
			<article class="col1">
			<br/> <br/> <br/><br/> <br/> <!-- additional breaks -->
				<h2>Registration</h2>
                
				<div id="me1 content">
                
	
	
                
                <form id="form" name="register" action="registered.php" method="get" onsubmit="return validate(register)" style="font-size:1.2em;">
		<fieldset>
            
    		
			<p style="font-weight:bold; color:brown; font-size:15px">Fees:
			<br/>
				<u>For IEEE member participants: Rs. 50/-<br/>
				For NON IEEE member participants: Rs. 100/-</u>
			</p>
			<p style="font-size:14px; color:red"><strong>Given fee details are for entire iFest - no additional fee for individual event(s). Fee for the SixthSense Botz Workshop is Rs. 5000 for a team of 5. Additional fee of Rs. 50 per participant in the Arduino Workshop (Optional kit for Rs. 2500 per team).</strong></p>
			
			<table cellpadding="5" width="100%">
				<tr>
					<td width="27%">Name *</td>
					<td width="73%"><input name="name" type="text" /></td>
				</tr>

				<tr>
					<td>Gender</td>
					<td><label><input name="gender" value="Male" checked="checked" type="radio" />Male </label>
						<label><input name="gender" value="Female" type="radio" /> Female </label>
					</td>
				</tr>
				<tr>
					<td>Institute/Organisation*</td>
					<td><input name="institute" type="text" id="suggest-inst" size="50" maxlength="100" /></td>
				</tr>
				<tr>
					<td>Designation</td>
					<td><label><input 
							onclick="$('#need-membership').css('display', 'none'); $('#ieee-number').css('display', 'block');" 
							name="designation" value="IEEEMember" checked="checked" type="radio" />IEEE Member
						</label>
						<label><input 
							onclick="$('#need-membership').css('display', 'block'); $('#ieee-number').css('display', 'none');" 
							name="designation" value="NonIEEEMember" type="radio" /> Non-IEEE Member
						</label><br />
						<fieldset style="margin:5px 0; border:0;">
							<label id="need-membership" style="display:none;"><input name="membership" type="checkbox" value="yes" checked="checked" /> Do you want to apply for IEEE membership(Rs. 1350, Only for Daiictians)</label>
							<label id="ieee-number" style="display:block;">IEEE Membership Number <input name="ieeeno" onclick="if(this.value=='12345678')this.value=''" onblur="if(this.value=='') this.value='12345678'" value="12345678" type="text"  maxlength="8" /></label>
						</fieldset>
					</td>
				</tr>
				<tr>
					<td>Postal Address</td>
					<td><textarea cols="50" rows="3" name="address"></textarea></td>

				</tr>
				<tr>
					<td>City</td>
					<td><input name="city" type="text" value="" id="city" /></td>
				</tr>

				<tr>
					<td>Pin </td>
					<td><input name="pin" type="text"  value="" /></td>
				</tr>
				<tr>
					<td>Phone no.*</td>
					<td><input name="phone" value="+91-9413880009" onclick="if(this.value=='+91-9413880009')this.value='+91-'" onblur="if(this.value=='+91-') this.value='+91-9413880009'" /></td>

				</tr>
				<tr>
					<td>Email*</td>
					<td><input name="email" onclick="if(this.value=='valid@ieee.org')this.value=''" onblur="if(this.value=='') this.value='valid@ieee.org'" value="valid@ieee.org" type="text" /></td>
				</tr>
                <tr>
                <td colspan="2" style="text-align:center">
                <span style="color:#990000; font-weight:bold">Select events you want to participate.</span>
                </td>
                </tr>
                
				
				<tr>
                <td class="event_catagory">
                Technical events
                </td>
                <td><p>
                  <label style="font-size:14px">
                    <input type="checkbox" name="ibot" value="ibot" id="MainEvents_0"  />
                    <b>iBot</b> - Robotics design competition</label>
                  <br />
                  <label style="font-size:14px">
                    <input type="checkbox" name="ielectro" value="ielectro" id="MainEvents_1" />
                    <b>iElectro</b> - Electronic freaks, check this out!</label>
                  <br />
                  <label style="font-size:14px">
                    <input type="checkbox" name="iapp" value="iapp" id="MainEvents_2" />
                    <b>iApp</b> - Mobile application development</label>
                  <br />
                  <label style="font-size:14px">
                    <input type="checkbox" name="ivision" value="ivision" id="MainEvents_3" />
                    <b>iVision</b> - Present your ideas</label>
                  <br />
                  <label style="font-size:14px">
                    <input type="checkbox" name="b2b" value="b2b" id="MainEvents_4" />
                    <b>B2B</b> - Plan a Business Plan</label>
                  <br />
                  
                  <label style="font-size:14px">
                    <input type="checkbox" name="icode" value="icode" id="MainEvents_5" />
                     <b>iCode</b> - Online coding competition</label>
                  <br />
				<label style="font-size:14px">
                    <input type="checkbox" name="ipapyrus" value="ipapyrus" id="FunEvents_5" />
                    <b>iPapyrus</b> - Paper Presentation</label>
                  <br />
                  <label style="font-size:14px">
                    <input type="checkbox" name="idatadesign" value="idatabase" id="MainEvents_6" />
                    <b>iDatabase</b> - Design a database schema for problem</label>
                  <br />
                  <label style="font-size:14px">
                    <input type="checkbox" name="idebug" value="C Up Your Skills/idebug" id="MainEvents_7" />
                    <b>C up Your Skills</b> - Check your C skills(only for B.Tech First Year)</label>
                    
                  
                                  </p></td>
                </tr>
                
                
				<tr>
                <td class="event_catagory">Fun events</td>
                <td><p>
                  <label style="font-size:14px">
                    <input type="checkbox" name="irubble" value="irubble" id="FunEvents_1" />
                    <b>iRubble</b> - Making best use of waste</label>
                  <br />
                  <label style="font-size:14px">
                    <input type="checkbox" name="iart" value="iart" id="FunEvents_2" />
                    <b>iArt</b> -  Show your Art</label>
                  <br />
                    <label style="font-size:14px"><input type="checkbox" name="imaze" value="imaze" id="FunEvents_3" />
                      <b>iMaze</b> - Use your Brain</label>
                    <br />
                    <label style="font-size:14px">
                      <input type="checkbox" name="iquiz" value="iquiz" id="FunEvents_4" />
                      <b>iQuiz</b> - Test Your Knowledge</label>
                    <br />
                    
                  <label style="font-size:14px">
                    <input type="checkbox" name="ivideo" value="ivideo" id="FunEvents_6" />
                    <b>iVideo</b> - Video Making</label>
                    <br/>
                    <label style="font-size:14px">
                    <input type="checkbox" name="arduino" value="Arduino Mela" id="Workshop_0" />
                   <b>Arduino Mela</b></label>
                  <br />
               
                  <label style="font-size:14px">
                    <input type="checkbox" name="th" value="Treasure Hunt" id="FunEvents_7" />
                    <b>Treasure Hunt</b></label>
                  <br />
                   
                  </p></td>
               
                </tr>             
                <tr>
                <td class="event_catagory">Online events</td>
                <td><p>
                  <label style="font-size:14px">
                    <input type="checkbox" name="idesign" value="idesign" id="OnlineEvents_0" />
                   <b>iDesign</b> - Submit your best shots.</label>
                  <br />
                
                   
                
                  <label style="font-size:14px">
                    <input type="checkbox" name="icapture" value="icapture" id="OnlineEvents_1" />
                    <b>iCapture</b> - Submit posters</label>
                  <br />
                  <label style="font-size:14px">
                    <input type="checkbox" name="idecipher" value="idecipher" id="OnlineEvents_2" />
                    <b>iDecipher</b> - Picture Quiz</label>
                  <br />
                  <label style="font-size:14px">
                    <input type="checkbox" name="ifunda" value="ifunda" id="OnlineEvents_3" />
                    <b>iFunda</b> - Physics Quiz</label>
                  

      </p></td>
                </tr>
               
                              <tr>
                <td class="event_catagory">Workshop</td>
                <td>
                <p>
                   <label style="font-size:14px">
                    <input type="checkbox" name="sixsense" value="SixthSense Botz" id="Workshop_1" />
                   <b>SixthSense Botz</b></label>
                  <br />
                  <label style="font-size:14px">
                    <input type="checkbox" name="arduinow" value="arduinow" id="Workshop_2" />
                   <b>Arduino Workshop</b></label>
                  <br />
                </p></td>
                
                </tr>

               
			</table>
		</fieldset>
		<p style="font-size:12px"><small><i>Fields marked as * are mandatory.</i></small></p>
		<fieldset>
    		
			<div style="text-align:center;"><input name="Register"  type="submit" id="Register" style="font-size: 13pt;" value="Register" /></div>
		</fieldset>
	</form>
                
                <br/><br/><br/>
             
		
		 
	
                
                
                
                
                </div>
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
		
	<!--<article id = "sch" > <h5 id = "resources">Schedule</h5>
	<li style = "color:#ab0000; font-size:16px"><a href="pdf/Schedule.pdf" target="_blank"><b>Event Schedule</b></a></li>-->
	</footer>
<!-- / footer -->
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35008883-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>