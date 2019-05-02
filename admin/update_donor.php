<?php session_start();
   if(!isset($_POST['update'])){
	   header("Location:manage_donor.php");
	   exit();
	   }
?>
        <?php
   include("../database/connect.php");
   
   if(isset($_POST['update'])){
	   
	    $_SESSION['id'] = $_GET['update'];
	    $emailsignup = $_POST['email'];
		$q = "SELECT * FROM donor_reg WHERE email = '$emailsignup' ";
		$query = mysqli_query($connection, $q);
		$row= mysqli_fetch_assoc($query);
		$user= $row['email'];
        if($emailsignup != $user){
		$_SESSION['message'] = "can't change email address";
		header("Location:edit_donor.php?edit=".$_GET['update']."");
		exit();
    }else{
		
		if (strlen(trim($_POST["password"]))<6) {
		  $_SESSION['message'] = "Password be minimum 6 character";
		  header("Location:edit_donor.php?edit=".$_GET['update']."");
		  exit();
  }else{
	   
	    $user_id= $_GET['update'];
	    $userName = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$num = $_POST['mob_num'];
		$group = $_POST['blood_group'];
		$district = $_POST['district'];
		$date = $_POST['last_date'];
		$address = $_POST['address'];
		
		$q="UPDATE `donor_reg` SET `name`='$userName', `email`='$email', `password`='$pass', `mob_num`='$num', `blood_group`='$group', `district`='$district', `age`='$age', `gender`='$gender', `last_date`='$date', `address`='$address' WHERE `user_id`='$user_id' LIMIT 1";
	   
	   $query=mysqli_query($connection, $q);
	   
	   if($query){
		   
		   header("Location:manage_donor.php");
		   exit();
	  }else{
		  echo'<h2>Someting occured wrong</h2>';
	  }
  }
   }
  }
?>