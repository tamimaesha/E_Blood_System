<!DOCTYPE>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Head section including    -->
        <?php include 'includes/head.php'; ?>
        
        
        <style type="text/css">
		     table{border:2px solid #333;}
			 td,tr,th{margin:0; padding:15px;}
			 th{border-left:2px solid #333; border-bottom:3px solid #333; text-align:center; background:#e6e6e6;}
			 td{border-left:2px solid #999; border-bottom:3px solid #333; background:#ffffe7;}
			 th:first-child{border-left:none; padding:5px; }
			 td:first-child{border-left:none; padding:5px; text-align:center;}
			 h2{padding:0px; font-size:35px;}
	    </style>
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

<div class="row">  <!--Start Slider section -->

<center><img src="images/hero.jpg" style="width:70%;"></center>
  
</div> <!-- End Slider section -->

<div class="row" id="wrapper"><!--Start wrapper section -->


<div class="row">
<div class="col-md-12">
<h2 style="padding:10px; font-family:times new roman; font-size:35px; text-align:center; background:#666666; color:#fff; width:100%; border-radius:60px;">Donor</h2></div>
</div>


<div class="row">
<div class="col-md-12" id="donorlist">

                    <table class="table" align="center" width="100" style="margin-top:30px;">
        
            <tr>
                <th>No.</th>
                <th>Donor Name</th>
                <th>Email</th>
                <th>Age</th>
				<th>Gender</th>
                <th>Blood Group</th>
                <th>Living District</th>
                <th>Last Donate</th>
                <th>Mobile Number</th>
				<th>Address</th>
            </tr>
<?php
include("database/connect.php");

   if(isset($_GET['group'])){
	   
	   $group=urlencode($_GET['group']);
	   
	   $get_donor= "select * from `donor_reg` where `blood_group`='$group'";
	   
	   }else{
		   
	$get_donor= "select * from donor_reg";
	
	   }
	$run=mysqli_query($connection, $get_donor);
	$i=1;
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
            <tr class="view" align="center">
                <td><?php echo $i++; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $age; ?></td>
				<td><?php echo $gender; ?></td>
                <td><?php echo $blood_group; ?></td>
                <td><?php echo $district; ?></td>
                <td><?php echo $last_date; ?></td>
                <td><?php echo $mob_num; ?></td>
				<td><?php echo $address; ?></td>
            </tr>
  <?php } ?>
    </table></div>
	
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