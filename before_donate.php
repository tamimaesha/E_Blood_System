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


<!--Before donation row starts-->
<div class="row">

<div class="col-md-7" id="donation">
<h3>Before&nbsp; Donation</h3>
<ul>
<li>Maintain a healty iron level in your diet by eating iron rich foods, such as red meat, fish, poultry, beans, spinach, iron-fortified cereals and raisins</li>
<li>Get a good night's sleep</li>
<li>Drink an extra 16 oz. of water or nonalcoholic fluids before donation</li>
<li>Eat healthy food before donation. Avoid fatty foods such as burgers, fries or ice cream before donating</li>
<li>Remember to bring your donor card</li>
</ul>
</div>


<div class="col-md-5"><img src="images/vg.jpg" style="margin-top:140px; width:100%;"></div>

</div> <!--End row-->



<!--During donation row starts-->
<div class="row">

<div class="col-md-7" id="donation">
<h3>During&nbsp; Donation</h3>
<ul>
<li>Wear cloth with sleeves that can be raised above the elbow</li>
<li>Let the person taking your blood if you have a preferred arm and show them any good veins that have been used successfully in the past to draw blood</li>
<li>Relax, listen to music, talk to other donors or read during the donation process</li>
<li>Take the time to enjoy a snack and a drink in the refreshments area immediately after donating</li>
</ul>
</div>


<div class="col-md-5"><img src="images/man.jpg" style="margin-top:120px; width:95%; border-radius:50px; 
-webkit-box-shadow: -1px 0px 10px 0px rgba(0,0,0,0.33);
-moz-box-shadow: -1px 0px 10px 0px rgba(0,0,0,0.33); 
box-shadow: -1px 0px 10px 0px rgba(0,0,0,0.33);}"></div>

</div> <!--End row-->



<!--After donation row starts-->
<div class="row">

<div class="col-md-7" id="donation">
<h3>After&nbsp; Your&nbsp; Donation</h3>
<ul>
<li>Drink an extra four (8 ounce) glasses of liquids and avoid alcohol over the next 24 hours</li>
<li>Remove the wrap bandage within the next hour</li>
<li>Do not do any heavy lifting or vigorous exercise for the rest of the day</li>
<li>Avoid driving if you feel the least bit faint</li>
<li>If you feel unwell at any stage after giving blood, call the blood service or see you doctor</li>
</ul>
</div>


<div class="col-md-5"><img src="images/water.jpg" style="margin-top:120px; width:95%; border-radius:50px; 
-webkit-box-shadow: -1px 0px 10px 0px rgba(0,0,0,0.33);
-moz-box-shadow: -1px 0px 10px 0px rgba(0,0,0,0.33); 
box-shadow: -1px 0px 10px 0px rgba(0,0,0,0.33);"></div>

</div> <!--End row-->

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