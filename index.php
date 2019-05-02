<?php include("database/connect.php"); ?>


<!DOCTYPE>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Head section including    -->
        <?php include 'includes/head.php'; ?>
</head>

<body>
<div class="container" id="customcontainer"> <!--Start Full Container section -->


<div class="row" id="topbar">  <!--Start top section-->
     <?php include 'includes/top.php'; ?>
</div><!--End top section-->


<div class="row" id="header"> <!--Start header section -->
    <?php include 'includes/header.php'; ?> 
</div> <!--End header section -->

<div class="row" id="menu-wrap"><!--Start Menu section -->
			  <?php include 'includes/menu.php'; ?>              
</div><!--End Menu section -->

<div class="row" id="sliderFrame"><!--Start Slider section -->
 
  <div id="slider">
            <img src="images/slider/slider-3.jpg" />
            <img src="images/slider/slider-1.png" />
            <img src="images/slider/slider-4.jpg" />
			<img src="images/slider/slider-2.jpg" />
        </div>
        <!--Custom navigation buttons on both sides-->
        <div class="group1-Wrapper">
            <a onclick="imageSlider.previous()" class="group1-Prev"></a>
            <a onclick="imageSlider.next()" class="group1-Next"></a>
        </div>
  
</div><!--End Slider section -->


<div class="row" id="wrapper"><!--Start wrapper section -->

<div class="col-md-3" id="sidebar"><!--Start leftsidebar section -->
<?php include 'includes/sidebar.php'; ?> 
</div><!--End leftsidebar section -->



<div class="col-md-9" id="d_q" style="margin-top:20px;   border-left:1px solid #ffcccc; 
border-right:1px solid #ffcccc; border-radius:40px;">


<!--Start Donor Section-->

<div class="col-md-6" id="donor">

<center><img src="images/dr.jpg" style="margin-top:20px; width:60%;"></center>

<div class="row">


<!--Form  start-->
<div class="col-md-6" id="apDiv1">
    
    
	
<form id="form1" name="form1" method="post" action="login.php">
  <table class="tbl_form" width="461" height="179">
    <tr>
      
      </tr>
  
    <tr>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr>
      <td class="field">Your Email</td>
      <td class="field">:</td>
      <td>
       <div id="email_form" style="align:center;">
        <input type="text" name="email" id="email" value="" class="input_email2" required>
      </div></td>
    </tr>
    <tr>
      <td class="field">Password</td>
      <td class="field">:</td>
      <td>
        <div id="password_form" style="align:center;">
        <input type="password" name="password" id="password" value="" class="input_password2" required>
      </div> </td>
    </tr>
    <tr>
        <td class="field"></td>
      <td class="field"></td>
      <td>
        <div id="password_form" style="margin:10px 0 0 20px;">
        <input type="radio" name="u" id="u" value="do" required>&nbsp;&nbsp;<b>Donor</b>
        
		<input type="radio" name="u" id="u" value="pa" required>&nbsp;&nbsp;<b>Patient</b>
          </div></td>
    </tr>
     <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
      
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
	  
        <input type="submit" name="login" class="sign_user" value="Login" style="margin-left:30px; width:85%;">   </td>
    </tr>
  </table>
  </form>
</div></center><!--form ends--> 

</div>
</div>

<!--End Donor section-->




<!--Start Request Section-->
<div class="col-md-6" id="donor">

<center><img src="images/br1.jpg" style="margin-top:35px; width:58%;"></center>

<a href="donor_signup/index.php">Donor &nbsp;Form</a>


<a href="patient_signup/index.php">Patient &nbsp;Form</a>

</div>


<!--End Request section-->
</div>



<div class="row">

  <div class="col-md-4 donor1">
                    
                    <h3>Latest Members</h3>
					
					<?php
						$get_donor= "select * from donor_reg order by 1 DESC limit 0,4";
						$run=mysqli_query($connection, $get_donor);
						   while($row=mysqli_fetch_assoc($run)){
						
								$user_id=$row['user_id'];
								$name=$row['name'];
								$email=$row['email'];
								$age=$row['age'];
								$gender=$row['gender'];
								$blood_group=$row['blood_group'];
								$district=$row['district'];
								$last_date=$row['last_date'];
								$mob_num=$row['mob_num'];
								$address=$row['address'];
						   
				   	?>
                    
                    <div style="border:1px solid #D8D8D8; border-radius:5px; margin-top:25px; overflow:hidden; background:#ffe6e6; box-shadow: 1px 2px 6px rgba(0, 0, 0, .5);">
                    
                          <div style="margin:15px; line-height:30px; font-size:15px;">
						  
						  
						  <strong>Name: </strong> <?php echo $name; ?><br>
                          <strong>Blood Group: </strong> <?php echo $blood_group; ?> 
                          <strong style="margin-left:40px;">Age: </strong> <?php echo $age; ?> years<br>
                          <strong>District: </strong> <?php echo $district; ?>
						  <strong style="margin-left:40px;">Last Donate: </strong> <?php echo $last_date; ?><br>
                          <strong>Contact No: </strong> <?php echo $mob_num; ?>
						  </div>
                    
                    </div>
                    
                    <?php } ?>
                          
                    
                    </div>
                    
                    <div class="col-md-4 patient1">
                    
                    <h3>Current Request for Blood</h3>
					<?php

							$q = "select * from patient order by 1 DESC limit 0,4";
							$query=mysqli_query($connection, $q);
							while($row=mysqli_fetch_assoc($query)){
							
								$user_id=$row['user_id'];
								$name=$row['name'];
								$email=$row['email'];
								$password=$row['password'];
								$blood_group=$row['blood_group'];
								$amount=$row['amount'];
								$needed_date=$row['needed_date'];
								$district=$row['district'];
								$mob_num=$row['mob_num'];
								$address=$row['address'];
							
					?>
                    
                    <div style="border:1px solid #D8D8D8; border-radius:5px; margin-top:25px; overflow:hidden; background:#ffffcf; box-shadow: 1px 2px 6px rgba(0, 0, 0, .5);">
                    
                          <div style="margin:15px; line-height:30px; font-size:16px;">
						  
						  <strong>Name: </strong> <?php echo $name; ?><br>
						  <strong>Blood Group: </strong> <?php echo $blood_group; ?>
                          <strong style="margin-left:20px;">Needed Date: </strong> <?php echo $needed_date; ?><br>
                          <strong>Current District: </strong> <?php echo $district; ?><br>
                          <strong>Contact No: </strong> <?php echo $mob_num; ?></div>
                    
                    </div>
                    
                    <?php } ?>
                    
                    
                    </div>


</div>
</div>	<!--End wrapper section -->



<div class="row"><!--Start last section -->
<?php include 'includes/last.php'; ?>
</div><!--End last section -->



<div class="row"><!--Start copyright section -->
<?php include 'includes/copyright.php'; ?>
</div><!--End copyright section -->




</div><!--End Full Container section -->
</body>
</html>