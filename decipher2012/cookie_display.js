			var hours;
			var minutes;
			var seconds;
			var hr_min_sec=new Array();

function getCookie(c_name)
{

	if (document.cookie.length>0)
	  {
  	c_start=document.cookie.indexOf(c_name + "=");
  	
  	if (c_start!=-1)
    	{
    		
			c_start=c_start + c_name.length+1;
		    c_end=document.cookie.indexOf(";",c_start);
    				if (c_end==-1) c_end=document.cookie.length;
		  	return unescape(document.cookie.substring(c_start,c_end));
    	}
  		
		}
}
  
function checkCookie(param)
{
	var time;
	var i;
			
			time=getCookie(param);
			if (time!=null && time!="")
  			{
				if(param=="time"){
					
					document.getElementById('time_left').innerHTML=time;
					parser(time);
					document.getElementById('time_left').innerHTML=hours+":"+minutes+"."+seconds;
					// var hours= the string before '.'
	   				// var minutes= the string after '.'
					display();
					}
				if( param=="username"){
						document.write(time);
				}
				else 	document.getElementById('time_left').innerHTML="Refresh";

}
}


function parser(time){
		var begin,end;
		begin=time;		
		for(i=0;i<3;i++){
					
					end=time.indexOf(":",begin);
					//alert('before addition');
					//alert(end);
					hr_min_sec[i]=(time.substring(begin,end));
					end=end+1;
					begin=end;
					//alert(end);
							}
						
		hours=hr_min_sec[0];
		minutes=hr_min_sec[1];
		seconds=hr_min_sec[2];
		//alert(hours);	
}

function display(){ 
	//alert(seconds);
	 if(minutes<=10){//display hurry in red}
	 }
	 if (seconds<=0){ 
   		 //alert(time);
		 seconds=59; 
    	minutes=minutes-1; 
 				} 
	 
	//alert(time);
	if (minutes<=0){ 
    		minutes=59 ;
    		hours-=1; 
 		} 
	 if(hours<=-1){
	 		minutes=hours=seconds=0;
			return;
			//stop script
			}
	 else{ 
   		 seconds-=1 ;
		}
		 document.getElementById('time_left').innerHTML=hours+":"+minutes+"."+seconds;
		 
		 setTimeout("display()",1000);
		
	 
}

function setCookie(){

		var expires;
		var temp2;
		var ttexpire=2;
		var date = new Date();
		var value=hours+ ":" + minutes+ ":" +seconds + ":";
		
		date.setTime(date.getTime()+(ttexpire*60*1000));
		
		temp2=getCookie('time');
		
		if( temp2!=null && temp2!=""){
			if(temp2.indexOf("undefined")!=-1){
				date.setTime(date.getTime() - 1000);
				expires ="; expires=-1" 
					document.cookie = "time"+"=0"+  expires + "; path=/" ;
				}
				
				
		expires ="; expires=" + date.toUTCString();
		
		document.cookie = "time"+"="+ escape(value) + expires + "; path=/" ;
		
		
		}
		
		else
		return;
}


