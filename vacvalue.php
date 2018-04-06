<?
$reqlevel=1;
include 'ck.php';


$Location=$_POST[Location];
$Designation=$_POST[Designation];
$Salary=$_POST[Salary];
$No_of_vacancies=$_POST[No_of_vacancies];
$Min_eligibility=$_POST[Min_eligibility];



date_default_timezone_set("Asia/Calcutta");
$dt1=date("Y-m-d h:i:s a");
?>

<?
$select1=mysql_query("select * from loc where loc='$Location'");
      while($r1=mysql_fetch_array($select1))
	 {   
		 $Locid=$r1['sl'];
		 
$select2=mysql_query("select * from main_signup where Username='$user_currently_loged'");
      while($r2=mysql_fetch_array($select2))
	 {   
		 $Orgid=$r2['Username'];
		 
if($Designation=="" or $Salary=="" or $No_of_vacancies=="" or $Min_eligibility=="")
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
$query = "INSERT INTO org_vac(orgid,locid,Desg,min_quali,sal,no_of_vac) VALUES ('$Orgid','$Locid','$Designation','$Min_eligibility','$Salary','$No_of_vacancies')";
$result = mysql_query($query) or die(mysql_error());
?>

<script language="javascript">
alert('Vacancy Created!');
document.location = "vac.php";
</script>
<?
	 }}}