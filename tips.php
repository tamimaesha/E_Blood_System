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



<div class="row" id="wrapper"><!--Start wrapper section -->

<div class="col-md-3" id="sidebar"><!--Start leftsidebar section -->
<?php include 'includes/sidebar.php'; ?> 
</div><!--End leftsidebar section -->






<div class="col-md-9" id="content"> <!--Start main content section -->


<div class="row"> <!--Start title section -->

<?php
   
		$get_donor="select * from health_tips order by 1 DESC limit 0,1";
		$run=mysqli_query($connection, $get_donor);
		$i=1;
		$row=mysqli_fetch_assoc($run);
	
	        $tips_id=$row['tips_id'];
			$tips_title=$row['tips_title'];
			$description=$row['tips_description'];
			$tips_image=$row['tips_image'];
			$upload_date=$row['upload_date'];
   
	?>
	
	
<div class="col-md-12">
<h2><?php echo $row['tips_title']; ?></h2>
 </div>
</div> <!--End title section -->


<div class="row"> <!--Start feature image section -->
<div class="col-md-12">
<center><img src="admin/tips_images/<?php echo $row['tips_image']; ?>" style="margin-top:10px; width:90%;"/></center>
 </div>
</div> <!--End feature image section -->


<div class="row"> <!--Start dscription section -->
<div class="col-md-12">
<p style="text-align:justify; font-family:tahoma; font-size:14px; margin-top:30px; color:#4d4d4d; line-height:40px;">
<?php echo $row['tips_description']; ?>
</p>
 </div>
</div> <!--End dscription section -->

</div> <!--End main content section -->



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