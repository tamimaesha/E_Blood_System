<?php session_start();
include("include/db_connection.php");

if(!isset($_POST['submit'])){
	header("Location:index.php");
	exit();
	}
if(isset($_POST['submit']))
{
		$email = $_POST['email'];
		$password =  $_POST['password'];
		$q = "SELECT * FROM user_information WHERE email = '$email' AND password = '$password'";
	
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
				$_SESSION['password']=$password;
				header("Location:home.php");
				exit;
			}
		}else
			{
				
				echo'<script>alert("INVALID USERNAME OR PASSWORD");</script>';
				$_SESSION['message'] = "INVALID USERNAME OR PASSWORD";
				header("Location:index.php");
				exit;
			    
			}
		}
		
		$_SESSION['message'] = "Invalid username or password!!";
		echo'<script>alert("INVALID USERNAME OR PASSWORD");</script>';
		header("Location:index.php");
		exit;
}
?>