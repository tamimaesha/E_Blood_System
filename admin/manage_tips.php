<!DOCTYPE html>
<?php
session_start();
if((!isset($_SESSION["email"])) && (!isset($_SESSION["password"])) )
print('<script>window.location.href="index.php"</script>');
?>


<head>
<?php include 'include/Header.php'; ?>



<link rel="stylesheet" href="css/pagination.css">
<style type="text/css">
	         table{border:2px solid #333;}
			 td,tr,th{margin:0; padding:15px;}
			 th{border-left:2px solid #333; border-bottom:3px solid #333;}
			 td{border-left:2px solid #999; border-bottom:3px solid #333;}
			 th:first-child{border-left:none; padding:5px;}
			 td:first-child{border-left:none; padding:5px;}
			 h2{padding:10px;}
			 button{ color:white; background:#107C45;}
	    </style>
</head>


<body>


<?php include 'include/Topbar.php'; ?>
<div class="template-page-wrapper">
	  <div class="navbar-collapse collapse templatemo-sidebar">
		<?php include 'include/Left_sidebar.php'; ?>
	  </div><!--/.navbar-collapse -->

	  <div class="templatemo-content-wrapper">
		<div class="templatemo-content" align="left";>
		  <ol class="breadcrumb">
			<li><a href="login_process.php">Admin Panel</a></li>
			<li> Manage Donor </li>
				<h1>Manage Blood Bank</h1>
		  </ol>
		  <div class="row animfade">

<body style="text-align:center;">

     <div class="table-responsive"><table class="table" align="center" bgcolor="#F9F9F9" width="100">
     
        
            <tr>
                <th>#</th>
                <th>Tips Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Upload Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
<?php
include("../database/connect.php");
	$get_donor= "select * from health_tips";
	$run=mysqli_query($connection, $get_donor);
	$i=1;
	while($row=mysqli_fetch_assoc($run)){
	
	        $tips_id=$row['tips_id'];
			$tips_title=$row['tips_title'];
			$description=$row['tips_description'];
			$tips_image=$row['tips_image'];
			$upload_date=$row['upload_date'];
			
			$_SESSION['ecual']=$tips_id;
	?>
            <tr class="view" align="center">
                <td><?php echo $i++; ?></td>
                <td><?php echo $tips_title; ?></td>
                <td><?php echo $description; ?></td>
                <td><img src="tips_images/<?php echo $tips_image; ?>" width="60" height="60" ></td>
                <td><?php echo $upload_date; ?></td>
                <td><a href="edit_tips.php?edit=<?php echo $tips_id; ?>"><button>Edit</button></a></td>
                <td><a href="delete_tips.php?delete=<?php echo $tips_id; ?>" onClick="return confirm('Are you sure?')";><button style="background:#940002;">Delete</button></a></td>
            </tr>
  <?php } ?>
    </table></div>

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