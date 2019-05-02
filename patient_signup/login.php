<?php include("../layouts/head.php"); ?>
<?php session_start();
include("../database/connect.php");

if(!isset($_POST['login'])){
	header("Location:patient_login.php");
	exit();
	}
if(isset($_POST['login']))
{
		$email = $_POST['email'];
		$password =  $_POST['password'];
		$q = "SELECT * FROM patient WHERE email = '$email' AND password = '$password'";
	
			$query=mysqli_query($connection, $q);
			$row=mysqli_fetch_assoc($query);
			$email=$row['email'];
			$password=$row['password'];
	
		if($email=$email && $password = $password){
		if($res = $connection->query($q))
		{
			if($res->num_rows > 0)
			{
				$_SESSION['user_id']=$row['user_id'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['email']=$email;
				header("Location:welcome.php");
				exit;
			}
		}else
			{
				echo'<script>alert("INVALID USERNAME OR PASSWORD");</script>';
				$_SESSION['message'] = "INVALID USERNAME OR PASSWORD";
			    header("Location:patient_login.php");
				exit;
			}
		}
		
		$_SESSION['message'] = "Invalid username or password!!";
		header("Location:patient_login.php");
		exit;
}
?>
<?php include("../layouts/footer.php"); ?>
