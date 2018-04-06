<?
$reqlevel=1;
include "ck.php";


$Location=$_POST[Location];
$cont=$_POST[cont];


date_default_timezone_set("Asia/Calcutta");
$dt1=date("Y-m-d h:i:s a");
?>

<?
$select1=mysql_query("select * from loc where loc='$Location'");
      while($r1=mysql_fetch_array($select1))
	 {   
		 $locid=$r1['sl'];
		 
$select2=mysql_query("select * from main_signup where Username='$user_currently_loged'");
      while($r2=mysql_fetch_array($select2))
	 {   
		 $orgid=$r2['Username'];
		 
if($Location=="" or $cont=="")
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
$query = "INSERT INTO org_loc(orgid,locid,cont) VALUES ('$orgid','$locid','$cont')";
$result = mysql_query($query) or die(mysql_error());
?>

<script language="javascript">
alert('Branch Created!');
document.location = "branch.php";
</script>
<?
	 }}}