<?php
 

include("db.php"); 
if (!isset($_SESSION)) {
  session_start();
}
 
//rest of your php scripts can go here
 
$user = $_SESSION['user'];
 

$query_Recordset1 = "SELECT * FROM donor_reg WHERE email='$user'";
$Recordset1 = mysql_query($query_Recordset1) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
//echo the name
echo $row_Recordset1['name']; 


$email=$_POST['email'];
$password=$_POST['password'];

if ($email==""  or $password=="")
{
echo "All fields must be entered, hit back button and re-enter information";
}
else
{
$sql="SELECT * FROM donor_reg WHERE email='".$email."' and password='".$password."'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){}

else
{

header('location: donor_login.php');
}
}

?>