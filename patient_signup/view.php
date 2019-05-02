<?php session_start();
if(!$_GET['view']){
	header("Location:index.php");
	exit;
}
 ?>
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
 <?php   include("../database/connect.php");
 
		if(isset($_GET['view']))
	  {
		  
		  if(isset($_SESSION['mob_num'])){
			  unset($_SESSION['mob_num']);
		     echo "<script>window.alert('You have successfully registered')</script>";
			 }
		  
		
		$user_id=$_GET['view'];
		$q = "SELECT * FROM patient WHERE user_id='$user_id'";
		$query=mysqli_query($connection, $q);
		$row=mysqli_fetch_assoc($query);
		
		$user_id=$row['user_id'];
		$name=$row['name'];
		$email=$row['email'];
		$blood_group=$row['blood_group'];
		$amount=$row['amount'];
		$needed_date=$row['needed_date'];
		$district=$row['district'];
		$mob_num=$row['mob_num'];
		$address=$row['address'];
		
	  }
 ?>
    <div>
      <marquee><h2 class="form_title" style="font-family:Adobe Garamond Pro Bold;"><strong>Welcome</strong>&nbsp; <span style="color:#a60059;"><?php echo $name; ?></span></h2></marquee>
    </div>
	
    <!--Form  start-->
    <div class="col-md-12" id="apDiv1">
                   

         <ul style="list-style:none; background:#fff0ff; border-radius:40px;">
                <li><strong>Name:</strong>&nbsp;&nbsp;&nbsp<?php echo $name; ?></li>
                <li><strong>Email:</strong>&nbsp;&nbsp;&nbsp<?php echo $email; ?></li>
				<li><strong>Blood Group:</strong>&nbsp;&nbsp;&nbsp<?php echo $blood_group; ?></li>
                <li><strong>Amount:</strong>&nbsp;&nbsp;&nbsp<?php echo $amount; ?></li>
                <li><strong>Needed Date:</strong>&nbsp;&nbsp;&nbsp<?php echo $needed_date; " Unit/Bag"; ?></li>
                <li><strong>District:</strong>&nbsp;&nbsp;&nbsp<?php echo $district; ?></li>
				<li><strong>Mobile Number:</strong>&nbsp;&nbsp;&nbsp<?php echo $mob_num; ?></li>
                <li><strong>Address:</strong>&nbsp;&nbsp;&nbsp<?php echo $address; ?></li>
         </ul>
         <h3><a href="edit.php?edit=<?php echo $user_id; ?>">Edit &nbsp;&nbsp;Profile</a>
         &nbsp;&nbsp;<a href="delete.php?delete=<?php echo $user_id; ?>" onClick="return confirm('Are you sure to delete?')"; >
 Delete ID</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="logout.php"><strong>LOGOUT</strong></a></h3>

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