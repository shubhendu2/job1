<?
$reqlevel=1;
include "ck.php";

?>
<form name="f1" method="post" action="qvalue.php">
<table border="0" width="300px" align="center" bgcolor="orange">
<tr>
<td  align="right">Qualification:</td>
<td colspan="4"><input type="text" name="Qualification" id="Qualification"></td> 
</tr>

<tr>
<td colspan="5" align="right"><br>
<input type="submit" value=" ENTRY ">
</td></tr></table></form>


<table border="0" align="center" width="700px">
<tr bgcolor="#63A6B8">
<th align="center" width="5%">Sl.</th>
<th align="center" width="10%">Qualification</th>
<th align="center" width="10%">Stat</th>
</tr>
<?
$f=0;
$select=mysql_query("select * from quali");
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
		  $quali=$r1['quali'];
		  $stat=$r1['stat'];	
?>
<tr bgcolor="<?=$clr;?>">
<td ><?=$f;?></td>
<td ><?=$quali;?></td>
<td ><?=$stat;?></td>
</tr>
<?
	 }
?>
</table>