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

<!--First row start-->

<div class="row">

<div class="col-md-7" id="mission">
<h3>Our &nbsp;Mission</h3>
<p>The Qur'an is not a book in the sense that it might have been revealed and presented in one volume
and it is not a historical record of events arranged in their sequence. The Qur'an was revealed in fragments 
of varying lengths over a twenty-three year period, a period of stress and conflict, and every text was not only
related to the overall plan but also to emerging situations. As each text appeared, it was properly arranged, 
assigned a number among the verses and that position was never altered.  
</p>
</div>


<div class="col-md-5" id="vol">
<center><img src="images/donate.jpg"></center></div>
</div>

<!--First row end-->


<div class="row">
<div class="col-md-12">
<h3 style="margin-top:36px; background-color:#e6e6e6; color:#e60000; padding:10px;">Features &nbsp;Of &nbsp;Our &nbsp;Volunteery &nbsp;Blood &nbsp;Donation &nbsp;System</h3></div>
</div>


<div class="row">
<div class="col-md-6" id="feature">
<ul>

<li><p>We seek to understand others' viewpoints and ask questions to clarify understanding</p></li>
<li><p>We convey information clearly and succinctly both orally and in writing</p></li>
<li><p>We actively listen to others and remain fully present in the conversation</p></li>
<li><p>We adapt communication to the needs of the audiance</p></li>
<li><p>We engage to open dialogue with others, promoting information flow across the organization</p></li>
</ul></div>






<div class="col-md-6" id="feature2">
<ul>

<li><p>Our service is innovative & community-conscious organization</p></li>
<li><p>Our service is responsible for strategically leveraging the goals of blood management</p></li>
<li><p>Our system and our expert staff is versatile and driven by challanges</p></li>
<li><p>Our service location are involved public service endeavours</p></li>
<li><p>Our staff are actively encouraged to gain new skills through career development opportunities</p></li>
</ul></div>
</div>







<div class="row">
<div class="col-md-6">
<h3 style="margin-top:36px; background-color:#e6e6e6; color:#e60000; padding:10px;">Contact &nbsp;Us</h3></div>
</div>





<div class="col-md-12" id="d_q" style="margin-top:20px;   border-left:5px solid #ff6666; 
border-right:5px solid #ff6666; border-radius:40px;">

<div class="row">
<div class="col-md-6" id="contact">
<img src="images/email.jpg" style="margin-top:0px; width:80%;"></div>


<div class="col-md-6" id="contact">
<img src="images/call.jpg" style="margin-left:50px; width:73%;"></div>

</div>

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