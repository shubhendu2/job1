<?PHP
$server = "localhost"; 			// often localhost
$username = "root"; 			// Your MySQL server username
$password = ""; 			// Your MySQL server password
$database = "job_org"; 	// Your database Name

$c1="No Such Hosting Found!";
$c2="No Such DB Found!";
	// connect or show an error.
	$conn = mysql_connect($server,$username,$password) or die ($c1); 
	mysql_select_db($database,$conn) or die ($c2);
	
	
$incorrectLogin = "Incorrect login";
$accountNotActivated = "This account has not been activated yet!";
?>