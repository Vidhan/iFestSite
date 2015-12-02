<?php 
require_once("functions.php");
function anadi_begun_or_not_scheme(){
	$file_pointer=fopen("start_date_time","r") or die("Could not open validate");
	$file_contents=fread($file_pointer,filesize("start_date_time")) or die("Error reading");
	fclose($file_pointer);
	list($begin_timestamp,$duration)=explode(":",$file_contents) or die("EXPLOSION IN PHP PARSER");
	/*$list($begin_mnth,$begin_day,$begin_hr,$begin_min,$begin_duration)=explode(":",$file_contents); //file format: MM:DAY:HOURS:MINUTES:duration ,hours in 24 hr format,leading zeroes
//month:day:hours:minutes:duration	
	
	$begin_sec=0;
	
	
	//duration in minutes contain leading zeroes 
	//$time= day(m:d:l:H:i:);
	//if (strcmp($time,$date_time)!=0){
	//
		//	header("Location: index.php");
			//exit;
		//	}
	$time=@localtime();
	$serv_sec=$time[0]; //seconds
	$serv_min=$time[1]; //minutes
	$serv_hour=$time[2]; //hours
	serv_day=$time[3]; //day 
	$serv_month=$time[4]; //month
	
	if( $begin_mnth>=$serv_month && $begin_day>=$serv_day && $begin_hr>=$serv_hour && $begin_min>=$serv_min &&begin_sec>=
*/
	$timestamp=time();
	$diff=$timestamp-$begin_timestamp;
	if( $diff <0){ //game has not begun yet
			
			header("Location: index.php");
			exit;
			}
	if( $timestamp - ($begin_timestamp+$duration) > 0) //user logged in after the game is over
	{
	//
	//temporary solution
	setcookie("time",0,time()-2,"/googlock/");
	header("Location: index.php");
	
	}
	}

function begun_or_not($page){
	$connection=createConn();
	
	$sql_query="SELECT * FROM googlockstart_end where no='0'";
	$temp=mysql_query($sql_query,$connection);
	$result=mysql_fetch_array($temp);
	$curr_timestamp=time();
	if( curr_timestamp < result[start_timestamp] ){
		$msg= "Game has not started yet";
		$var=0
		}
	else if(curr_timestamp>result[finish_timestamp]){
		$msg= "Game has finished";
		$var=1;
		}
	else 
		$msg= "Game has Started!!";
	
	finish($connection);
	if($page==1){
		if($var==0){
		header("Location: index.php");
		exit;
		}
		
		else if(var==1){
		setcookie("time",0,time()-2,"/googlock/");
		header("Location: index.php");
		}
	}
	else
	return $msg;
	}
	
	
	?>

