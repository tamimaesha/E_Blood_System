<?php 
if(!$_GET['delete']){
	header("Location:index.php");
	exit;
}
 ?>
        <?php 
   session_start();
   include("../database/connect.php");
   if(isset($_GET['delete'])){

    $id = $_GET['delete'];
    $query = "DELETE FROM donor_reg WHERE user_id = '$id' LIMIT 1";
    $result = mysqli_query($connection, $query);
	  
	  if($result){
		  
		  header("Location:manage_donor.php");
		  
	  } else {
    }
  }
?>