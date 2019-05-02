<?php 

if(!isset($_POST['update'])){
	   header("Location:manage_tips.php");
	   exit();
	   }
?>
<?php
   include("../database/connect.php");
   
   if(isset($_POST['update'])){
	   
	    $id=$_GET['update'];
	   
	    $get_donor= "select * from health_tips where tips_id='$id'";
		$run=mysqli_query($connection, $get_donor);
		$row=mysqli_fetch_assoc($run);
	           
			   if(is_uploaded_file($_FILES['tips_image']['name'])){
				   $tips_image=$_FILES['tips_image']['name'];
			   }else{
				  $tips_image=$row['tips_image'];
				   }
				   
	     $title=$_POST['tips_title'];
	     $tips_image_tmp=$_FILES['tips_image']['tmp_name'];
		 $upload_date=date('m-d-y');
		 $description=$_POST['tips_description'];
		 
		 move_uploaded_file($tips_image_tmp,"tips_images/$tips_image");
		
		 $q="UPDATE `health_tips` SET `tips_title`='$title', `tips_description`='$description', `upload_date`='$upload_date', `tips_image`='$tips_image' WHERE `tips_id`='$id' LIMIT 1";
	   
	     $query=mysqli_query($connection, $q);
	   
	   if($query){
		   
		   header("Location:manage_tips.php");
		   exit();
		  
	  }else{
		  echo'<h2>Someting occured wrong</h2>';
	  }
  
   
  }
?>