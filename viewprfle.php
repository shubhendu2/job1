<?
$reqlevel=1;
include 'ck.php';
?>

<center>
<font color="red" size="8">Hello: <?
$select2=mysql_query("select * from main_signup where Username='$user_currently_loged'");
      while($r2=mysql_fetch_array($select2))
	 {   
		 $nm=$r2['nm'];
	 }
echo $nm;
?>
</font>
</center>
<br>
<br>

<table border="0" align="center" width="700px">
<tr bgcolor="#63A6B8">
<th align="center" width="5%">Sl.</th>
<th align="center" width="10%">Name</th>
<th align="center" width="15%">Address</th>
<th align="center" width="10%">Contact Number</th>
<th align="center" width="5%">Qualification</th>
<th align="center" width="5%">Year</th>
<th align="center" width="10%">Details</th>
</tr>
<?
$f=0;
$select=mysql_query("select * from main_signup where Username='$user_currently_loged'");
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
		  $nm=$r1['nm'];
		  $cont=$r1['cont'];

$select1=mysql_query("select * from stud_dtls where sid='$user_currently_loged'");
      while($r2=mysql_fetch_array($select1))
	  {
		  $addrs=$r2['addrs'];
		  
$select2=mysql_query("select * from stud_quali where sid='$user_currently_loged'");
      while($r3=mysql_fetch_array($select2))
	  {
		  $quali=$r3['quali'];
		  $yr=$r3['yr'];
		  $dtls=$r3['dtls'];
?>
<tr bgcolor="<?=$clr;?>">
<td ><?=$f;?></td>
<td ><?=$nm;?></td>
<td ><?=$addrs;?></td>
<td ><?=$cont;?></td>
<td ><?=$quali;?></td>
<td ><?=$yr;?></td>
<td ><?=$dtls;?></td>
</tr>
<?
	 }}}
?>
</table>