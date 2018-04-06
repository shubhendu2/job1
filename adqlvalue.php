<?
$reqlevel=1;
include 'ck.php';


$quali=$_POST[quali];
$yr=$_POST[yr];
$dtls=$_POST[dtls];




date_default_timezone_set("Asia/Calcutta");
$dt1=date("Y-m-d h:i:s a");
?>

<?
		 
if($quali=="" or $yr=="" or $dtls=="")
{
?>
	<Script language="JavaScript">
	alert('Please Fill All Field');
	window.history.go(-1);
	</script>
<?	
}	
else
{
$query = "INSERT INTO stud_quali(sid,quali,yr,dtls) VALUES ('$user_currently_loged','$quali','$yr','$dtls')";
$result = mysql_query($query) or die(mysql_error());
?>

<script language="javascript">
alert('Profile Updated!');
document.location = "addquali.php";
</script>
<?
	 }