<?php session_start(); ?>


<!DOCTYPE>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Head section including    -->
            <?php include("includes/head.php"); ?>
</head>

<body>
<div class="container" id="customcontainer"> <!--Start Full Container section -->


<div class="row" id="topbar">  <!--Start top section-->
     <?php include("includes/top.php"); ?>
</div><!--End top section-->


<div class="row" id="header"> <!--Start header section -->
    <?php include("includes/header.php"); ?> 
</div> <!--End header section -->

<div class="row" id="menu-wrap"><!--Start Menu section -->
			  <?php include("includes/menu.php"); ?>              
</div><!--End Menu section -->



<div class="row" id="wrapper"><!--Start wrapper section -->

<div id="d_q" style="margin-top:20px; width:100%; overflow:hidden; border-left:1px solid #ffcccc; 
border-right:1px solid #ffcccc; border-radius:40px;">

				<!--Form container start-->

 <div class="col-md-4"><center><img src="../images/need.png" style="margin-top:200px;"></center></div>
 
 <div class="col-md-8">
    <div>
      <h2 class="form_title"></h2>
    </div>
	
    <!--Form  start-->
    <div class="col-md-12" id="apDiv1">
        
		
		
<?php
   include("../database/connect.php");
   
   if(isset($_POST['update'])){
	   
	    $_SESSION['id'] = $_GET['update'];
	    $emailsignup = $_POST['email'];
		$q = "SELECT * FROM donor_reg WHERE email = '$emailsignup' ";
		$query = mysqli_query($connection, $q);
		$row= mysqli_fetch_assoc($query);
		$user= $row['email'];
        
		
		
		if($emailsignup != $user)
		{
		$_SESSION['message'] = "can't change email address";
		header("Location:edit.php?edit=".$_GET['update']."");
		exit();
        }
		
	else{
		
		if (strlen(trim($_POST["password"]))<6) 
		{
		  $_SESSION['message'] = "Password be minimum 6 character";
		  header("Location:edit.php?edit=".$_GET['update']."");
		  exit();
        }
  
  else{
	   
	    $user_id= $_GET['update'];
	    $userName = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$num = $_POST['mob_num'];
		$blood_group = $_POST['blood_group'];
		$district = $_POST['district'];
		$date = $_POST['last_date'];
		$address = $_POST['address'];
		
		$q="UPDATE `donor_reg` SET `name`='$userName', `email`='$email', `password`='$pass', `mob_num`='$num', `blood_group`='$blood_group', `district`='$district', `age`='$age', `gender`='$gender', `last_date`='$date', `address`='$address' WHERE `user_id`='$user_id' LIMIT 1";
	   
	   $query=mysqli_query($connection, $q);
	   
	   if($query)
	   {
		   
		   echo'<h2 style="color:green;">Your profile has been successfully updated</h2>';
		   
		   echo '<br><br><strong>Name:</strong> '.$userName.'<br><strong>Email:</strong> '.$email.'<br> <strong>Age:</strong> '.$age.'<br><strong>Gender:</strong> '.$gender.'<br><strong>Mobile No:</strong> '.$num.'<br><strong>Group:</strong> '.$blood_group.'<br><strong>District:</strong> '.$district.'<br><strong>Last Date:</strong> '.$date.'<br><strong>Address:</strong> '.$address;
		   
		   
		   
		  
	  }
	  
	  else{
		  echo'<h2>Someting occured wrong</h2>';
	      }
  }
   }
  }
?>
         
</div>

    <!--form ends--> 

</div>
</div><!--End d_q class-->

</div>	<!--End wrapper section -->

<div class="row"><!--Start last section -->
<?php include("includes/last.php"); ?>
</div><!--End last section -->

<div class="row"><!--Start copyright section -->
<?php include("includes/copyright.php"); ?>
</div><!--End copyright section -->

</div><!--End Full Container section -->
</body>
</html>