<?
$reqlevel=1;
include 'ck.php';
?>
<center><font size="10">Update Your Profile</font>
<form name="f1" method="post" action="adqlvalue.php">
<table bgcolor="#FFC177" align="center">
<tr>
<td align="right">Qualification:</td>
<td><select name="quali" id="quali">
<option value="">---Select---</option>
<?
$select=mysql_query("select * from quali") or die(mysql_error());;
      while($r1=mysql_fetch_array($select))   
	 {
		  $quali=$r1['quali'];
?>
<option value="<?=$quali;?>"><?=$quali;?></option>
<?
	 }
?>
</select>
</td>
</tr>
<tr>
<td align="right">YEAR:</td>
<td colspan="0"><input type="text" name="yr" id="yr" size="21" placeholder="please enter the your Year"> </td>
</tr>
<tr>
<td align="right">Details:</td>
<td colspan="5"><input type="text" name="dtls" id="dtls" size="63" placeholder="Please Enter Your Details"> </td>
</tr>
<td colspan="5" align="right">
<input type="submit" value="ADD"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</tr>
</table>
</form>