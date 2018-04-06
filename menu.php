<?
$reqlevel=1;
include "ck.php";
?>

<?
	if($user_current_level<0)
{
?>
<h2 >Entry</h2> 
<div > 
   <li><a href="loc.php" target="mainFrame">Location Entry</a></li>
   <li><a href="qualification.php" target="mainFrame">Qualification Entry</a></li>

</div>

<h2 >Application</h2> 
<div > 
   <li><a href="newapp.php" target="mainFrame">New Application</a></li>
   <li><a href="#" target="mainFrame">Rejected Application</a></li>

</div>


<?
}
?>

<?
if($user_current_level<0 or $user_current_level>=10)
{
?>
<h2>Add Vacancies & Branches</h2> 
     <div>

	 
    <li><a href="vac.php" target="mainFrame">Create Vacancies</a></li>
	<li><a href="branch.php" target="mainFrame">Create Branches</a></li>
	</div>
<?
}
?>

<?
if($user_current_level<0 or $user_current_level>=5)
{
?>   
		<h2 class="accordion-header">Job Search</h2>
<div>		
   <li><a href="srch_loc.php" target="mainFrame">According to Location</a></li>
</div>
<?
}
?>

<?
if($user_current_level<0 or $user_current_level>=5)
{
?>

<h2 class="accordion-header">Update/View Profile</h2>
<div>		
   <li><a href="addquali.php" target="mainFrame">Add Qualification</a></li>
   <li><a href="#" target="mainFrame">Add Prefered Location</a></li>
   <li><a href="viewprfle.php" target="mainFrame">View Profile</a></li>
</div>
<?
}
?>


<?
if($user_current_level<0 or $user_current_level>0)
{
?>

<h2 class="accordion-header">System</h2> 

     <div class="accordion-content"> 
   <li><a href="#" target="mainFrame">Change Password</a></li>
   <li><a href="logoff.php" target="mainFrame">Logout</a></li>
</div> 
<?	
}
?>