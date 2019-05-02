<?php include("../includes/session.php"); ?>

<?php
include("../database/connect.php");
   if(isset($_GET['edit'])){
	   
	    $id=$_GET['edit'];
		$get_donor= "select * from health_tips where tips_id='$id'";
		$run=mysqli_query($connection, $get_donor);
		$i=1;
		$row=mysqli_fetch_assoc($run);
	
	        $tips_id=$row['tips_id'];
			$tips_title=$row['tips_title'];
			$description=$row['tips_description'];
			$tips_image=$row['tips_image'];
			$upload_date=$row['upload_date'];
   }
	?>
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
	margin:10px; padding:10px;
	}
    </style>
</head>


<body>
<?php include 'include/Topbar.php'; ?>


<div class="template-page-wrapper">
	  <div class="navbar-collapse collapse templatemo-sidebar">
		<?php include 'include/Left_sidebar.php'; ?>
	  </div><!--/.navbar-collapse -->

		<div class="templatemo-content">
		  <ol class="breadcrumb">
			<li><a href="login_process.php">Admin Panel</a></li>
			<li> Edit Donor </li>
				<h1>Manage Donor</h1>
		  </ol>
		  <div class="row animfade" style="text-align:center; margin-top:0; margin-bottom:30px;" align="center">

<div class="row" id="wrapper"><!--Start wrapper section -->
<div id="d_q">
				<!--Form container start-->
 
 <div class="col-md-8">
    <div>
      <h2 class="form_title" style="margin-bottom:30px;"><strong>Insert &nbsp;&nbsp;Health &nbsp;&nbsp;Tips &nbsp;&nbsp;Form </strong></h2>
    </div>
	
    <!--Form  start-->
    <div class="col-md-12" id="apDiv1" align="center" >
  <?php echo message(); ?>
  <?php echo $tips_id; ?>
         
<form action="update_tips.php?update=<?php echo $tips_id; ?>" method="post" enctype="multipart/form-data">

	<table width="800" align="center">
    
    <tr>
    	<td align="right" bgcolor=""><strong>Tips Title:</strong></td>
        <td><input type="text" name="tips_title" size="60" value="<?php echo $tips_title ?>"/></td>
    </tr>
    
    <tr>
    	<td align="right" bgcolor=""><strong>Insert Image:</strong></td>
        <td><input type="file" name="tips_image" size="50" value="<?php echo $tips_image ?>"/></td>
    </tr>
    
    <tr>
    	<td align="right" bgcolor=""><strong>Description:</strong></td>
        <td><textarea name="tips_description" rows="15" cols="50"><?php echo $description ?> </textarea></td>
    </tr>
    
    
    <tr>
        <td colspan="6" align="center" bgcolor=""><input type="submit" name="update" value="publish now" /></td>
    </tr>
    
    </table>

</form>

</div>

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