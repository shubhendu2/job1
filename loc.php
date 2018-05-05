<?
$reqlevel=1;
include "ck.php";

?>
<html>
<head>
<script type="text/javascript" src="js1.js"></script>
</head>

<table border="0" width="300px" align="center" bgcolor="pink">
<tr>
<td  align="right">Location:</td>
<td colspan="4"><input type="text" name="Location" id="Location"></td> 
</tr>

<tr>
<td colspan="5" align="right"><br>
<input type="submit" onclick="myFunction()" value="ENTRY">
</td></tr></table></html>
<div id="div1">


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
</div>