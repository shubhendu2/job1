<?
$reqlevel=1;
include 'ck.php';
?>

<form name="f1" method="post" action="vacvalue.php">
<table border="0" width="500px" align="center" bgcolor="pink">
<tr>
<td colspan="5"><input type="button" value="Organigation Vacancies"></td>
</tr>
<tr>
<td align="right">Location:</td>
<td><select name="Location" id="Location">
<option value="">---Select---</option>
<?
$select=mysql_query("select * from org_loc where orgid='$user_currently_loged'") or die(mysql_error());;
      while($r1=mysql_fetch_array($select))   
	 {
		  $locid=$r1['locid'];
	 


$select1=mysql_query("select * from loc where sl='$locid'") or die(mysql_error());;
      while($r2=mysql_fetch_array($select1))   
	 {
		  $Location=$r2['loc'];
?>
<option value="<?=$Location;?>"><?=$Location;?></option>
<?
	 }}
?>
</select>
</td>
</tr>
<tr>
<td align="right">Designation:</td>
<td><input type="text" name="Designation" id="Designation"></td>
</tr>

<tr>
<td  align="right">Salary:</td>
<td colspan="3"><input type="text" name="Salary" id="Salary"></td> 
</tr>
<tr>
<td align="right">No_of_vacancies:</td>
<td><input type="text" size="8" name="No_of_vacancies" id="No_of_vacancies"></td>
</tr>
<tr>
<td align="right">Minimum Eligibility:</td>
<td><select name="Min_eligibility" id="Min_eligibility">
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
<td colspan="5" align="right"><br>
<input type="submit" value=" SUBMIT ">


 </td>
</tr>
</table>
</form>