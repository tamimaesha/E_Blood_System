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
			<li> Manage Patient </li>
				<h1>Manage Blood Bank Patient</h1>
		  </ol>
		  <div class="row animfade">

<body style="text-align:center;">

     <div class="table-responsive"><table class="table" align="center" bgcolor="#F9F9F9" width="100">
        
            <tr>
                <th>#</th>
                <th>Patient Name</th>
                <th>Email</th>
                <th>Blood Group</th>
                <th>Amount</th>
                <th>Needed Date</th>
                <th>Current District</th>
                <th>Mobile Number</th>
				<th>Hospital Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
<?php
include("../database/connect.php");
	$get_patient= "select * from patient";
	$run=mysqli_query($connection, $get_patient);
	$i=1;
	while($row=mysqli_fetch_assoc($run)){
	
	        $user_id=$row['user_id'];
			$name=$row['name'];
			$email=$row['email'];
			$blood_group=$row['blood_group'];
			$amount=$row['amount'];
			$needed_date=$row['needed_date'];
			$district=$row['district'];
			$mob_num=$row['mob_num'];
			$address=$row['address'];
			
			$_SESSION['ecual']=$user_id;
	?>
            <tr class="view" align="center">
                <td><?php echo $i++; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $blood_group; ?></td>
                <td><?php echo $amount; ?></td>
		        <td><?php echo $needed_date; ?></td>
				<td><?php echo $district; ?></td>
                <td><?php echo $mob_num; ?></td>
                <td><?php echo $address; ?></td>
                <td><a href="edit_patient.php?edit=<?php echo $user_id; ?>"><button>Edit</button></a></td>
                <td><a href="delete_patient.php?delete=<?php echo $user_id; ?>" onClick="return confirm('Are you sure?')";><button style="background:#940002;">Delete</button></a></td>
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