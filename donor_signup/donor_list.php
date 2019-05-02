<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<style type="text/css">
     td,tr,thtable{margin:0; padding:0;}
	 th{border-left:2px solid #333; border-bottom:3px solid #333;}
	 td{border-left:2px solid #999;}
	 th:first-child{border-left:none; padding:5px;}
	 td:first-child{border-left:none; padding:5px;}
	 h2{padding:10px;}
</style>
</head>
<body>
    <table align="center" bgcolor="#F9F9F9" width="1000">
        <tr>
          <td colspan="12" align="center" bgcolor="#ff0000"><h2>Donor</h2></td>
        </tr>
            <tr>
                <th>No.</th>
                <th>Donor Name</th>
                <th>Email</th>
                <th>Age</th>
				<th>Gender</th>
                <th>Blood Group</th>
                <th>Living District</th>
				<th>Last Donated</th>
                <th>Mobile Number</th>
                <th>Address</th>
            </tr>
<?php
include("database/connect.php");
	$get_posts= "select * from donor_reg";
	$run_posts=mysqli_query($connection, $get_posts);
	$i=1;
	while($row_posts=mysqli_fetch_assoc($run_posts)){
	
	    $name = $row_POST['name'];
		$email = $row_POST['email'];
		$age = $row_POST['age'];
		$gender = $row_POST['gender'];
		$blood_group = $row_POST['blood_group'];
		$district = $row_POST['district'];
		$last_date = $row_POST['last_date'];
		$mob_num = $row_POST['mob_num'];
		$address = $row_POST['address'];
	?>
            <tr class="view" align="center">
                <td><?php echo $i++; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $age; ?></td>
				<td><?php echo $gender; ?></td>
			    <td><?php echo $blood_group; ?></td>
				<td><?php echo $district; ?></td>
				<td><?php echo $last_date; ?></td>
				<td><?php echo $mob_num; ?></td>
                <td><?php echo $address; ?></td>
            </tr>
  <?php } ?>
    </table>
</body>
</html>