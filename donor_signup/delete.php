<?php 

if(!$_GET['delete']){
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

<div class="row"><!--Start Slider section -->
  
  <img src="../images/slide1.png" style="width:100%;">
  
</div><!--End Slider section -->

<div class="row" id="wrapper"><!--Start wrapper section -->




<div id="d_q" style="margin-top:20px; width:100%; overflow:hidden; border-left:1px solid #ffcccc; 
border-right:1px solid #ffcccc; border-radius:40px;">

				<!--Form container start-->

 <div class="col-md-4"><center><img src="../images/bd.jpg" style="margin-top:240px; opacity:0.60;"></center></div>
 
 <div class="col-md-8">
    <div>
      <h2 class="form_title"></h2>
    </div>
	
    <!--Form  start-->
    <div class="col-md-12" id="apDiv1">
        <?php 
  
   include("../database/connect.php");
   if(isset($_GET['delete'])){

    $id = $_GET['delete'];
    $query = "DELETE FROM donor_reg WHERE user_id = '$id' LIMIT 1";
    $result = mysqli_query($connection, $query);
	  
	  if($result){
		  echo '<h2 style="color:green;">Your profile has been successfully deleted</h2>';
	  } else {
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