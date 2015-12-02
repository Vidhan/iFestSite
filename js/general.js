// JavaScript Document - ifest

window.onload=function()
{	$('#nav').load('http://ieee.daiict.ac.in/ifest/nav_igo.html #nav>*');
	$('#subnav').load('http://ieee.daiict.ac.in/ifest/nav_igo.html #subnav>*');
}

$().ready(function() {
	//for suggestion on registration form
	$("#suggest-inst").focus().autocomplete(institutes);
	$("#city").focus().autocomplete(cities);
	//on home page, to show who we are - IEEE Student Branch
	$('#organizer').hide();
		$('#we').bt({
		  contentSelector: "$('#organizer')", /*hidden div*/
		  trigger: 'hover',
		  width: 420,
		  spikeGirth: 40,
		  padding: 15,
		  cornerRadius: 25,
		  fill: '#FFF',
		  strokeStyle: '#ABABAB',
		  strokeWidth: 1
		});
});


function retrive()
{	var id = prompt("Enter your registration ID", "", "Retrive Receipt");
	var url = "http://ieee.daiict.ac.in/ifest/registration/retrive_receipt.php?id=" + id +"&sid="+Math.random();
	if(id != null)
		window.location = url;
}

var xmlhttp;	//ajax variable
var form;

function validate(frm) 
{   form = frm;
	if (frm.name.value.length == 0)
    {
        alert("Please enter your name.")
        frm.name.focus()
        return false
    }
	else if (frm.institute.value.length == 0)
    {
        alert("Please enter your institute/orgranization.")
        frm.institute.focus()
        return false
    }
	else if (frm.email.value.length == 0)
	{	alert("Invalid e-mail ID.")
        frm.email.focus()
        return false
	}
	else if (frm.email.value == 'valid@ieee.org')
	{	alert("Invalid e-mail ID.")
        frm.email.focus()
        return false
	}
	else if (frm.designation.value == 'IEEEMember' && frm.ieeeno.value.length != 8)
    {	alert("Please enter valid IEEE #.")
        frm.ieeeno.focus()
        return false
    }
	else
	{	if (window.XMLHttpRequest)	// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		else if (window.ActiveXObject) // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		else
			alert("Your browser does not support XMLHTTP!");

		var url="http://ieee.daiict.ac.in/ifest/registration/ajax.php";
		url=url+"?name="+frm.name.value;
		url=url+"&institute="+frm.institute.value;
		url=url+"&email="+frm.email.value;
		url=url+"&sid="+Math.random();
		xmlhttp.onreadystatechange=stateChanged;
		xmlhttp.open("GET",url,true);
		xmlhttp.send(null);
		
		return false;
	}
}

function stateChanged()
{	if(xmlhttp.readyState==4)
	{	if((xmlhttp.responseText != "no"))
		{	alert("You are already registered with Registration ID = " + xmlhttp.responseText + " :)");
			form.reset();
		}
		else
			form.submit();
	}
}
