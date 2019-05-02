<?php include("../includes/session.php"); ?>
<?php include("../database/connect.php"); ?>



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
	margin:0; padding:0; font-size:17px;
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
		  <div class="row animfade" style="text-align:center; margin-top:0; margin-bottom:30px;" align="center">

<div class="row" id="wrapper"><!--Start wrapper section -->
<div id="d_q" style="margin-top:20px; width:100%; overflow:hidden; border-left:1px solid #ffcccc; 
border-right:1px solid #ffcccc; border-radius:40px;">
				<!--Form container start-->
 
 <div class="col-md-8">
    <div>
      <h2 class="form_title" style="margin-bottom:20px;"><strong>Donor &nbsp;&nbsp;Registration&nbsp;&nbsp;Form </strong></h2>
    </div>
	
    <!--Form  start-->
    <div class="col-md-12" id="apDiv1" align="center" >

<?php echo message(); ?> 
         
<form id="form1" name="form1" method="post" action="add_donor.php">
  <table class="tbl_form" width="461" height="431">
    
    
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td width="185" height="31" class="field">User Name</td>
      <td width="33" class="field">:</td>
      <td colspan="2">
        <input type="text" name="name" id="textfield"  placeholder=" Your Name" style="width:300px; height:40px;" required/>      </td>
    </tr>
	
	
	<tr>
      <td class="field">Password</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="password" name="password" id="password" value="" placeholder=" Min 6 Character" style="width:300px; height:40px;" required />      </td>
    </tr>
	<tr>
      <td class="field">Email</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="email" name="email" id="textfield4" placeholder=" Email Will Be Your Login ID" style="width:300px; height:40px;" required/>
            </td>
    </tr>
    
    <tr>
      <td class="field">Age</td>
      <td class="field">:</td>
      <td colspan="2">
      
      <select name="age" id="select" style="width:300px; height:40px;" required>
        <option value="">- - Select - -</option>
        <?php
			for ($x = 16; $x <= 65; $x++) {
			echo "<option value='$x'>$x</option>";
			}
		?>
        </select>  </td>
    </tr>
    <tr>
      <td class="field">Gender</td>
      <td class="field">:</td>
      <td colspan="2"><select name="gender" id="select" style="width:300px; height:40px;" required>
        <option value="">- - Select - -</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>        </td>
    </tr>
   
    <tr>
      <td class="field">Blood Group</td>
      <td class="field">:</td>
      <td colspan="2"><select name="blood_group" size="1" id="select" style="width:300px; height:40px;" required>
          <option value="">- - Select - -</option>
            <option value="A negative(-)" >A negative(-)</option>
            <option value="A positive(+)" >A positive(+)</option>
            <option value="AB negative(-)" >AB negative(-)</option>
            <option value="AB positive(+)" >AB positive(+)</option>
            <option value="B negative(-)" >B negative(-)</option>
            <option value="B positive(+)" >B positive(+)</option>
            <option value="O negative(-)" >O negative(-)</option>
            <option value="O positive(+)" >O positive(+)</option>
        </select></td>
    </tr>
	
	 <tr>
      <td class="field">District</td>
	  <td class="field">:</td>
      <td colspan="2"><select name="district" size="1" id="select" style="width:300px; height:40px;" required>
          <option value="">- - Select - -</option>
          <option value="Bagerhat" >Bagerhat</option>
            <option value="Bandarban" >Bandarban</option>
            <option value="Barguna" >Barguna</option>
            <option value="Barisal" >Barisal</option>
            <option value="Bhola" >Bhola</option>
            <option value="Bogra" >Bogra</option>
            <option value="Brahmanbaria" >Brahmanbaria</option>
            <option value="Chandpur" >Chandpur</option>
            <option value="Chittagong" >Chittagong</option>
            <option value="Chuadanga" >Chuadanga</option>
            <option value="Comilla" >Comilla</option>
            <option value="Cox's Bazar" >Cox's Bazar</option>
            <option value="Dhaka" >Dhaka</option>
            <option value="Dinajpur" >Dinajpur</option>
            <option value="Faridpur" >Faridpur</option>
            <option value="Feni" >Feni</option>
            <option value="Gaibandha" >Gaibandha</option>
            <option value="Gazipur" >Gazipur</option>
            <option value="Gopalganj" >Gopalganj</option>
            <option value="Habiganj" >Habiganj</option>
            <option value="Jaipurhat" >Jaipurhat</option>
            <option value="Jamalpur" >Jamalpur</option>
            <option value="Jessore" >Jessore</option>
            <option value="Jhalokati" >Jhalokati</option>
            <option value="Jhenaidah" >Jhenaidah</option>
            <option value="Khagrachari" >Khagrachari</option>
            <option value="Khulna" >Khulna</option>
            <option value="Kishoreganj" >Kishoreganj</option>
            <option value="Kurigram" >Kurigram</option>
            <option value="Kushtia" >Kushtia</option>
            <option value="Lakshmipur" >Lakshmipur</option>
            <option value="Lalmonirhat" >Lalmonirhat</option>
            <option value="Madaripur" >Madaripur</option>
            <option value="Magura" >Magura</option>
            <option value="Manikgonj" >Manikgonj</option>
            <option value="Maulvi Bazar" >Maulvi Bazar</option>
            <option value="Meherpur" >Meherpur</option>
            <option value="Munshiganj" >Munshiganj</option>
            <option value="Mymensingh" >Mymensingh</option>
            <option value="Naogaon" >Naogaon</option>
            <option value="Narail" >Narail</option>
            <option value="Narayanganj" >Narayanganj</option>
            <option value="Narsingdi" >Narsingdi</option>
            <option value="Natore" >Natore</option>
            <option value="Nawabganj" >Nawabganj</option>
            <option value="Netrokona" >Netrokona</option>
            <option value="Nilphamari" >Nilphamari</option>
            <option value="Noakhali" >Noakhali</option>
            <option value="Pabna" >Pabna</option>
            <option value="Panchagarh" >Panchagarh</option>
            <option value="Patuakhali" >Patuakhali</option>
            <option value="Pirojpur" >Pirojpur</option>
            <option value="Rajbari" >Rajbari</option>
            <option value="Rajshahi" >Rajshahi</option>
            <option value="Rangamati" >Rangamati</option>
            <option value="Rangpur" >Rangpur</option>
            <option value="Shariatpur" >Shariatpur</option>
            <option value="Shatkhira" >Shatkhira</option>
            <option value="Sherpur" >Sherpur</option>
            <option value="Sirajganj" >Sirajganj</option>
            <option value="Sunamgonj" >Sunamgonj</option>
            <option value="Sylhet" >Sylhet</option>
            <option value="Tangail" >Tangail</option>
            <option value="Thakurgaon" >Thakurgaon</option>
        </select></td>
    </tr>
    <tr>
      <td class="field">Last Donated Date</td>
      <td class="field">:</td>
      <td><input type="text" name="last_date" id="textfield12" placeholder=" YY-MM-DD" style="width:300px; height:40px;" required/></td>
     
    </tr>
      
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td colspan="2">
        <input name="mob_num" type="text" id="textfield5" style="width:300px; height:40px;" required/>      </td>
    </tr>
	
	<tr>
      <td height="97" class="field">Address</td>
      <td class="field">:</td>
      <td colspan="2">
        <textarea name="address" id="textarea" cols="30" rows="5" required></textarea>      </td>
    </tr>
    
    
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
        <input type="submit" name="submit" class="sign_user" value="Submit"/>     </td>
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
			if(isset($_POST['submit'])){
				
				$email = $_POST['email'];
				$q = "SELECT * FROM donor_reg WHERE email = '$email' ";
				$query = mysqli_query($connection, $q);
				$row= mysqli_fetch_assoc($query);
				$user= $row['email'];
					if($row > 0){
					$_SESSION['message'] = "email has been matched with other user";
					header("Location:add_donor.php");
					exit;
					
				}else{
					
					if (strlen(trim($_POST["password"]))<6) {
					  $_SESSION['message'] = "Password be minimum 6 character";
					  header("Location:add_donor.php");
					  exit;
			  }else{
					 $name=$_POST['name'];
					 $email=$_POST['email'];
					 $password=$_POST['password'];
					 $age=$_POST['age'];
					 $gender=$_POST['gender'];
					 $blood_group=$_POST['blood_group'];
					 $district=$_POST['district'];
					 $last_date=$_POST['last_date'];
					 $mob_num=$_POST['mob_num'];
					 $address=$_POST['address'];
					
				$q = "INSERT INTO donor_reg(name,email,password,age,gender,blood_group,district,last_date,mob_num,address) VALUES('$name','$email','$password','$age','$gender','$blood_group','$district','$last_date','$mob_num','$address')";
				
				$run_query=mysqli_query($connection, $q);
				if($run_query){
					$qu = "SELECT * FROM donor_reg WHERE email = '$email' ";
					$query = mysqli_query($connection, $qu);
					$rows= mysqli_fetch_assoc($query);
						$_SESSION['user_id']=$rows['user_id'];
						$_SESSION['email'] = $rows['email'];
						$_SESSION['mob_num'] = $rows['mob_num'];
						$_SESSION['name'] = $rows['name'];
						header("Location:add_donor.php");
						exit;
						
				}else{
					echo'<script>alert("Some Error Occured");</script>';
				}
		    }
		}
	}
?>