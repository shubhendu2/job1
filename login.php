<?PHP

// retrieve the submitted values

$username1 = $_POST["Username"];
$password1 = $_POST["Password"];

$rememberMe = $_POST["rememberMe"];

// let the conct.php file connect to the database

include("conct.php");

// check it the username exist

$query = "Select * from main_signup where Username='$username1'";
$result = mysql_query($query);
if ($row = mysql_fetch_array($result)){

	// check if his account is activated, if not skip to this if's else case

	if ($row["actnum"] == "0"){

		// finally we check the database to see if the password is correct, if not skip to this if's else case

			if ($row["Password"] == $password1){
				$last_login=$row["lastlogin"];

				// we determin the date for the lastlogin - field.

				$datetime = date("d-m-Y G:i ");

				// and we update that field

				$query = "UPDATE main_signup Set lastlogin = '$datetime' where Username='$username1'";
				$result = mysql_query($query);

				// tell we want to work with sessions

				session_start();

				// remove al the data from the session (auto logoff)

				session_unset();

				
				// session_register("pass");

				$_SESSION["pass"] = $password1;

				// put the username in the session

				//session_register("id");

				$_SESSION["id"] = $username1;

				//session_register("last_login");

				$_SESSION["lastlog"] = $last_login;

				// send the the cookie if needed

				if($rememberMe=="1"){

				setcookie("rememberCookieUname",$username1,(time()+604800));

				setcookie("rememberCookiePassword",md5($password1),(time()+604800));

				}

				// go to the secured page.

				header("Location: index1.php");


			}

			else{
					makeform($incorrectLogin);}

		}

	// if the actnum is other than 0 that means the account has not been activated yet.

	else{

	makeform($accountNotActivated);

	}

}

// if the username does not exist we check it is filled in.

else{

	// if it isn't filled we assum that this is the page load and we show the form without an error.

	if ($username1 == ""){

		makeform("");

	}
	else {
		makeform($incorrectLogin);
	}
}
// this function shows the form.

// ....m($errormessage="", ... indicates an optionale argument for this function, same for $username.

function makeform($errormessage="", $username2 = ""){
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
<link href="assets/css/styley.css" rel='stylesheet' type='text/css' />
</head>
<body bgcolor="#265876">
	<div class="vid-container">
	  <div class="vid-container">
  <div class="inner-container">
  <img src="" class="bgvid inner" >
		<div class="box">
			<h1><font color="#ffffff">Member Login</font></h1>
	<form class="form" id="lform" method="post" action="login.php">
	        <?PHP

if ($errormessage != ""){

?>

<script language="javascript">
alert('<? echo $errormessage;?>');
</script>
<?
}
?>
<input type="text" id="Username" name="Username" class="text" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" style="text-align:center;">
	<input type="Password" autocomplete="off"  name="Password" id="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" style="text-align:center;">
	<button type="submit">LOGIN</button>
	Remember Me<input name="rememberMe" id="rememberMe" type="checkbox" value="1">

</form>
</div>
</div>
	</div>  
	</div>
</body>
</html>
<?php 
}
?>