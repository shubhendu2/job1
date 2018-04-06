<?
include 'conct.php';

$nm=$_POST[nm];
$addrs=$_POST[addrs];
$cont=$_POST[cont];
$Password=$_POST[Password];

$f=0;
$select=mysql_query("select * from stud_dtls");
      while($r1=mysql_fetch_array($select))   
	 {	  $f++;
	 }
	 $f++;
	 $sid="STUD".str_pad($f,4,0,str_pad_right);


if($nm=="" or $cont=="" or $Password=="")
{
?>
	<Script language="JavaScript">
	alert('Please Fill the requied Field');
	window.history.go(-1);
	</script>
<?	
}	
else
{
$query2 = "INSERT INTO stud_dtls (sid,nm,addrs,cont) VALUES ('$sid','$nm','$addrs','$cont')";
$result2 = mysql_query($query2) or die(mysql_error());

$query2 = "INSERT INTO main_signup (nm,Username,cont,Password) VALUES ('$nm','$sid','$cont','$Password')";
$result2 = mysql_query($query2) or die(mysql_error());

?>
<script language="javascript">
alert('You have successfully signed up');
document.location = "index.php";
</script>
<?
}
?>