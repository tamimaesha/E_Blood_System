<?php include("../includes/session.php"); ?>



<!DOCTYPE html>
<?php
if((!isset($_SESSION["email"])) && (!isset($_SESSION["password"])) )
print('<script>window.location.href="index.php"</script>');
?>



<head>
<?php include 'include/Header.php'; ?>



<link rel="stylesheet" href="css/pagination.css">
<style type="text/css">
tr,td{
	margin:0; padding:10px;
	}
    </style>
</head>

<body>



<?php include 'include/Topbar.php'; ?>
<div class="template-page-wrapper">
	  <div class="navbar-collapse collapse templatemo-sidebar">
		<?php include 'include/Left_sidebar.php'; ?>
	  </div><!--/.navbar-collapse -->

	  <div class="templatemo-content-wrapper">
		<div class="templatemo-content">
		  <ol class="breadcrumb">
			<li><a href="login_process.php">Admin Panel</a></li>
			<li> Edit Donor </li>
				<h1>Manage Donor</h1>
		  </ol>
		  <div class="row animfade" style=" margin-top:0; margin-bottom:30px;" align="center">

<div class="row" id="wrapper"><!--Start wrapper section -->
<div id="d_q">
				<!--Form container start-->
 
 <div class="col-md-8">
    <div>
      <h2 class="form_title" style="margin-bottom:30px; color:green;"><strong>Insert &nbsp;&nbsp;Health &nbsp;&nbsp;Tips &nbsp;&nbsp;Form </strong></h2>
    </div>
	
    <!--Form  start-->
    <div class="col-md-12" id="apDiv1" align="center" >
  <?php echo message(); ?>
         
<form action="add_tips.php" method="post" enctype="multipart/form-data">

	<table width="800" align="center">
    
    <tr>
    	<td align="right" bgcolor=""><strong>Tips Title:</strong></td>
        <td><input type="text" name="tips_title" size="60" /></td>
    </tr>
    
    <tr>
    	<td align="right" bgcolor=""><strong>Insert Image:</strong></td>
        <td><input type="file" name="tips_image" size="50" required/></td>
    </tr>
    
    <tr>
    	<td align="right" bgcolor=""><strong>Description:</strong></td>
        <td><textarea name="tips_description" rows="15" cols="50" > </textarea></td>
    </tr>
    
    
    <tr>
        <td colspan="6" align="center" bgcolor=""><input type="submit" name="submit" value="publish now" /></td>
    </tr>
    
    </table>

</form>

</div>

</div>
</div>
</div>

	</div>
	
	  <footer class="templatemo-footer">
		 <?php include 'include/Footer.php'; ?>
	  </footer>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
  </body>
</html>




<?php 
    include("../database/connect.php");
     
	 if(isset($_POST['submit'])){
		 
		 $title=$_POST['tips_title'];
		 $tips_image=$_FILES['tips_image']['name'];
	     $tips_image_tmp=$_FILES['tips_image']['tmp_name'];
		 $upload_date=date('m-d-y');
		 $description=$_POST['tips_description'];
		 
		 move_uploaded_file($tips_image_tmp,"tips_images/$tips_image");
		 
		 $insert_tips= "INSERT INTO health_tips (tips_title,tips_description,upload_date,tips_image) values ('$title','$description','$upload_date','$tips_image')";
		 
		 
		 $run_posts=mysqli_query($connection, $insert_tips);
			
			if($run_posts){
				$_SESSION['message']= "Post has been published";
				header("Location:health_tips.php");
	            exit();
				 
				}
		 }
?>