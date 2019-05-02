<?php session_start();
   if(!isset($_POST['update'])){
	   header("Location:manage_patient.php");
	   exit();
	   }
?>
        <?php
   include("../database/connect.php");
   
   if(isset($_POST['update'])){
	   
	    $_SESSION['id'] = $_GET['update'];
	    $emailsignup = $_POST['email'];
		$q = "SELECT * FROM patient WHERE email = '$emailsignup' ";
		$query = mysqli_query($connection, $q);
		$row= mysqli_fetch_assoc($query);
		$user= $row['email'];
        if($emailsignup != $user){
		$_SESSION['message'] = "can't change email address";
		header("Location:edit_patient.php?edit=".$_GET['update']."");
		exit();
    }else{
		
		if (strlen(trim($_POST["password"]))<6) {
		  $_SESSION['message'] = "Password be minimum 6 character";
		  header("Location:edit_patient.php?edit=".$_GET['update']."");
		  exit();
  }else{
	   
	    $user_id= $_GET['update'];
	    $userName = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$group = $_POST['blood_group'];
		$amount = $_POST['amount'];
		$needed_date = $_POST['needed_date'];
		$district = $_POST['district'];
		$mob_num = $_POST['mob_num'];
		$address = $_POST['address'];
		
		$q="UPDATE `patient` SET `name`='$userName', `email`='$email', `password`='$password', `blood_group`='$blood_group', `amount`='$amount', `needed_date`='$needed_date', `district`='$district', `mob_num`='$mob_num', `address`='$address' WHERE `user_id`='$user_id' LIMIT 1";
	   
	   $query=mysqli_query($connection, $q);
	   
	   if($query){
		   
		   header("Location:manage_patient.php");
		   exit();
	  }else{
		  echo'<h2>Someting occured wrong</h2>';
	  }
  }
   }
  }
?>