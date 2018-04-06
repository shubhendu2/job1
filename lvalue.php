<?
$reqlevel=1;
include "ck.php";

 $sid=$_POST[sid];
 $Location=$_POST[Location];

if($Location=="")
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
$query = "INSERT INTO loc(loc) VALUES ('$Location')";
$result = mysql_query($query) or die(mysql_error());
?>
<script language="javascript">
alert('Submited!');
document.location = "loc.php";
</script>
<?}
