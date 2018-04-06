<?
$reqlevel=1;
include 'ck.php';
?>

<form name="f1" method="post" action="bvalue.php">
<table border="0" width="500px" align="center" bgcolor="pink">
<tr>
<td align="right">Location:</td>
<td><select name="Location" id="Location">
<option value="">---Select---</option>
<?
$select=mysql_query("select * from loc") or die(mysql_error());;
      while($r1=mysql_fetch_array($select))   
	 {
		  $Location=$r1['loc'];
?>
<option value="<?=$Location;?>"><?=$Location;?></option>
<?
	 }
?>
</select>
</td>
</tr>
<tr>
<td align="right">Contact:</td>
<td><input type="text" name="cont" id="cont"></td>
</tr>

<tr>
<td colspan="5" align="right"><br>
<input type="submit" value=" SUBMIT "></td>
</table>

<table border="0" align="center" width="700px">
<tr bgcolor="#63A6B8">
<th align="center" width="5%">Sl.</th>
<th align="center" width="10%">Branch Location</th>
<th align="center" width="10%">Contact Number</th>
<th align="center" width="10%">Stat</th>
</tr>
<?
$f=0;
$select=mysql_query("select * from org_loc");
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
		  $locid=$r1['locid'];
		  $cont=$r1['cont'];
		  $stat=$r1['stat'];

$select1=mysql_query("select * from loc where sl='$locid'");
      while($r2=mysql_fetch_array($select1))
	  {
		  $loc=$r2['loc'];
?>
<tr bgcolor="<?=$clr;?>">
<td ><?=$f;?></td>
<td ><?=$loc;?></td>
<td ><?=$cont;?></td>
<td ><?=$stat;?></td>
</tr>
<?
	 }}
?>
</table>