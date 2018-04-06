<?
$reqlevel=1;
include 'ck.php'
?>
<center>
<font color="red" size="10">Welcome :<?
$select2=mysql_query("select * from main_signup where Username='$user_currently_loged'");
      while($r2=mysql_fetch_array($select2))
	 {   
		 $nm=$r2['nm'];
	 }
echo $nm;
?>
</font>
</center>