<?
$reqlevel=1;
include "ck.php";

 $sid=$_POST[sid];
 $Location=$_REQUEST[loc];

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
<center>Your Location has been entered</center>
<table border="0" align="center" width="700px">
<tr bgcolor="#63A6B8">
<th align="center" width="5%">Sl.</th>
<th align="center" width="10%">Location</th>
<th align="center" width="10%">Stat</th>
</tr>
<?
$f=0;
$select=mysql_query("select * from loc");
      while($r1=mysql_fetch_array($select))   
	 {		$f++;
        if($f%2==0)
		{
				$clr="#63A6B8";
		}
		else
		{
			$clr="#DEB5E3";
		}
		  $loc=$r1['loc'];
		  $stat=$r1['stat'];	
?>
<tr bgcolor="<?=$clr;?>">
<td ><?=$f;?></td>
<td ><?=$loc;?></td>
<td ><?=$stat;?></td>
</tr>
<?
	 }
?>
</table>
<?}
