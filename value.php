<?
include 'conct.php';

$orgnm=$_POST[orgnm];
$dtls=$_POST[dtls];
$cont=$_POST[cont];
$Password=$_POST[Password];

$f=0;
$select=mysql_query("select * from org_dtls");
      while($r1=mysql_fetch_array($select))   
	 {	  $f++;
	 }
	 $f++;
	 $orgid="ORG".str_pad($f,4,0,str_pad_right);


if($orgnm=="" or $cont=="" or $Password=="")
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
$query2 = "INSERT INTO org_dtls (orgid,orgnm,dtls,cont) VALUES ('$orgid','$orgnm','$dtls','$cont')";
$result2 = mysql_query($query2) or die(mysql_error());

$query2 = "INSERT INTO main_signup (nm,Username,cont,Password) VALUES ('$orgnm','$orgid','$cont','$Password')";
$result2 = mysql_query($query2) or die(mysql_error());

?>
<script language="javascript">
alert('You have successfully signed up');
document.location = "index.php";
</script>
<?
}
?>