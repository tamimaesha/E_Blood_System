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


<div class="row" id="wrapper"><!--Start wrapper section -->

<div class="col-md-3" id="sidebar"><!--Start leftsidebar section -->
<?php include 'includes/sidebar.php'; ?> 
</div><!--End leftsidebar section -->






































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