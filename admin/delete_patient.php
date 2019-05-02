<?php 

if(!$_GET['delete']){
	header("Location:index.php");
	exit;
}

 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body style="text-align:center;">

  <div class="row" id="wrapper"><!--Start wrapper section -->


<div id="d_q" style="margin-top:20px; width:100%; overflow:hidden; border-left:1px solid #ffcccc; 
border-right:1px solid #ffcccc; border-radius:40px;">

				<!--Form container start-->

 <div class="col-md-8">
    <div>
      <h2 class="form_title"></h2>
    </div>
	
    <!--Form  start-->
    <div class="col-md-12" id="apDiv1">
        <?php 
   session_start();
   include("../database/connect.php");
   if(isset($_GET['delete'])){

    $id = $_GET['delete'];
    $query = "DELETE FROM donor WHERE user_id = '$id' LIMIT 1";
    $result = mysqli_query($connection, $query);
	  
	  if($result){
		  echo '<h2 style="color:green;">Profile has been successfully deleted</h2>';
		  
		  echo "<h3><br><a href='manage_donor.php'><strong>Manage</strong></h3>";
		  
	  } else {
    }
  }
?>

</div>

    <!--form ends--> 

</div>
</div><!--End d_q class-->

</div>	<!--End wrapper section -->
</body>
</html>