<?php include("../layouts/head.php"); ?>
<?php session_start();
            if(!isset($_POST['submit'])){
			   header("Location:index.php");
			   exit();
			   }
			include("../database/connect.php");
			if(isset($_POST['submit'])){
				
				$email = $_POST['email'];
				$q = "SELECT * FROM patient WHERE email = '$email' ";
				$query = mysqli_query($connection, $q);
				$row= mysqli_fetch_assoc($query);
				$user= $row['email'];
					if($row > 0){
					$_SESSION['message'] = "email has been matched with other user";
					header("Location:index.php");
					exit;
				}else{
					
					if (strlen(trim($_POST["password"]))<6) {
					  $_SESSION['message'] = "Password be minimum 6 character";
					  header("Location:index.php");
					  exit;
			  }else{
					 $name=$_POST['name'];
					 $email=$_POST['email'];
					 $password=$_POST['password'];
					 $blood_group=$_POST['blood_group'];
					 $amount=$_POST['amount'];
					 $needed_date=$_POST['needed_date'];
					 $district=$_POST['district'];
					 $mob_num=$_POST['mob_num'];
					 $address=$_POST['address'];
					
				$q = "INSERT INTO patient(name,email,password,blood_group,amount,needed_date,district,mob_num,address) VALUES('$name','$email','$password','$blood_group','$amount','$needed_date','$district','$mob_num','$address')";
				
				$run_query=mysqli_query($connection, $q);
				if($run_query){
					$qu = "SELECT * FROM patient WHERE email = '$email' ";
					$query = mysqli_query($connection, $qu);
					$rows= mysqli_fetch_assoc($query);
						$_SESSION['user_id']=$rows['user_id'];
						$_SESSION['email'] = $rows['email'];
						$_SESSION['mob_num'] = $rows['mob_num'];
						$_SESSION['name'] = $rows['name'];
						header("Location:welcome.php");
						exit;
				}
				else
				{
					echo'<script>alert("Some Error Occured");</script>';
					header("Location:index.php");
					exit;
				}
			  }
				}
			}
			?>
<?php include("../layouts/footer.php"); ?>