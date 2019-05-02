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





<div class="col-md-9">


<div class="row">
<div class="col-md-8" id="rules">
<h1>Rules & Regulation Of Donate</h1>
<p>Giving blood is an excellent way to support people in need, even if you don't have the means to do so financially. In some areas, you may also be able to make money by donating blood. Whatever your motives, it is important to understand blood donation regulation before you begin.</p>

<h2>Minimum Requirements</h2>
<p>The minimum legal age to donate blood in most states is 17years of age. Some states may allow 16-year-olds to donate with parental consent. Donors over the age of 18 must weigh at least 110 pounds; additional weight limitations apply to high school students;</p>
</div>


<div class="col-md-4">
<img src="images/rl.png" style="margin-top:170px; width:100%;"></div>
</div>


<div class="row">
<div class="col-md-12" id="rules">
<h3>Some Of The Questions Donors Are Asked</h3>
<img src="images/qs.jpg">
</div></div>





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