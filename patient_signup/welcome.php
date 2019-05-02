<?php session_start();
      if(!isset($_SESSION['email'])){
	  header("Location:patient_login.php");
	  exit();
	  }
	 if(isset($_SESSION['email']))
	 { 
		//$_SESSION['last'] = $_SESSION['last_date'];
		echo'<br> <h1 style="text-align:center;"> <a href="view.php?view='.$_SESSION['user_id']. '">View Profile</a> </h1>';
		header("Location:view.php?view=".$_SESSION['user_id']."");
		exit();
	 } 
	 else
	 {
	 	echo 'Invalid user email or password <br>';
		echo'<a href="index.php">LOGIN</a>';
	 }
?>