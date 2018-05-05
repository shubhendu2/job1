divid='';
	function handleHttpResponse()
	{
		if (http.readyState == 4)
		{
			if (divid != '')
			{
			switch (divid){
			 
			     case 'delete':
                 	document.location.reload();
				  break;
				  case 'div1':
                 	document.getElementById(divid).innerHTML = http.responseText;
				break;
				case 'div2':
					document.getElementById(divid).innerHTML = http.responseText;
					default : 
					document.getElementById(divid).innerHTML = http.responseText;
			  }
			

			}
		}
	}
	function getHTTPObject()
	{
		var xmlhttp;
		/*@cc_on
		@if (@_jscript_version >= 5)
			try {
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (E) {
					xmlhttp = false;
				}
			}
		@else
		xmlhttp = false;
		@end @*/
		if (!xmlhttp && typeof XMLHttpRequest != 'undefined')
		{
			try
			{
				xmlhttp = new XMLHttpRequest();
			}
			catch (e)
			{
				xmlhttp = false;
			}
		}
		return xmlhttp;
	}
	var http = getHTTPObject(); // We create the HTTP Object

function myFunction()
{
divid='div1';

var loc = document.getElementById("Location").value;
//var email = document.getElementById("email").value;
//var password = document.getElementById("password").value;
//var contact = document.getElementById("contact").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'loc1='+loc;
if (loc == '') 
{
alert("Please Fill All Fields");
} 
else 
{
http.open("GET", "lvalue.php?loc="+loc, true);
		//http.open("GET", "srch1s.php?cont="+v1+"&nm1="+nm+"&cls1="+cls, true);
		http.onreadystatechange = handleHttpResponse;
		http.send(null);
}}