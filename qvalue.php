<?
$reqlevel=1;
include "ck.php";

$Qualification=$_POST[Qualification];


if($Qualification=="")
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
$query = "INSERT INTO quali(quali) VALUES ('$Qualification')";
$result = mysql_query($query) or die(mysql_error());
?>
<script language="javascript">
alert('Submited!');
document.location = "qualification.php";
</script>
<?
}