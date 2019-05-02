<?php include("../includes/session.php"); ?>
<!DOCTYPE html>
<?php
if((!isset($_SESSION["email"])) && (!isset($_SESSION["password"])) )
print('<script>window.location.href="index.php"</script>');
?>
<head>
<?php include 'include/Header.php'; ?>
<link rel="stylesheet" href="css/pagination.css">
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
			<li> Edit Patient </li>
				<h1>Manage Patient</h1>
		  </ol>
		  <div class="row animfade" style="text-align:center; margin-top:0; margin-bottom:30px;" align="center">
          <?php echo message(); ?>

<?php
include("../database/connect.php");

if(isset($_GET['edit']))
	  { 
	    unset($_SESSION['ecual']);
		$user_id=$_GET['edit'];;
		$q = "SELECT * FROM patient WHERE user_id=$user_id";
		$query=mysqli_query($connection, $q);
		$row=mysqli_fetch_assoc($query);
		
		    $user_id=$row['user_id'];
			$name=$row['name'];
			$email=$row['email'];
			$blood_group=$row['blood_group'];
			$amount=$row['amount'];
			$needed_date=$row['needed_date'];
			$district=$row['district'];
			$mob_num=$row['mob_num'];
			$address=$row['address'];
	  }

?>

<div class="row" id="wrapper"><!--Start wrapper section -->
<div id="d_q" style="margin-top:20px; width:100%; overflow:hidden; border-left:1px solid #ffcccc; 
border-right:1px solid #ffcccc; border-radius:40px;">
				<!--Form container start-->
 
 <div class="col-md-8">
    <div>
      <h2 class="form_title">Patient &nbsp;&nbsp;Profile &nbsp;&nbsp;Update &nbsp;&nbsp;Form </h2>
    </div>
	
    <!--Form  start-->
    <div class="col-md-12" id="apDiv1" align="center" >
    
         
<form id="form1" name="form1" method="post" action="update_patient.php?update=<?php echo $user_id ?>" enctype="multipart/form-data" >
  <table class="tbl_form" width="461" height="431">
    
    
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td width="185" height="31" class="field">Patient Name</td>
      <td width="33" class="field">:</td>
      <td colspan="2">
        <input type="text" name="name" id="textfield"  placeholder="Your Patient's Name" style="width:300px; height:40px;" value="<?php echo $name ?>" required/>     </td>
    </tr>
	
	
	
	<tr>
      <td class="field">Email</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="email" name="email" id="textfield4" placeholder="Email Will Be Your Login ID" style="width:300px; height:40px;" value="<?php echo $email ?>" required/>      </td>
    </tr>

    <tr>
      <td class="field">Blood Group</td>
      <td class="field">:</td>
      <td colspan="2"><select name="blood_group" size="1" id="select" style="width:300px; height:40px;" value="<?php echo $blood_group ?>" required/> 
          <option value="">- - Select - -</option>
              <option value="A-" >A negative(-)</option>
              <option value="A+" >A positive(+)</option>
              <option value="AB-" >AB negative(-)</option>
              <option value="AB+" >AB positive(+)</option>
              <option value="B-" >B negative(-)</option>
              <option value="B+" >B positive(+)</option>
              <option value="O-" >O negative(-)</option>
              <option value="O+" >O positive(+)</option>
        </select></td>
    </tr>
	
	
	<tr>
      <td class="field">Amount (Unit/Bag)</td>
      <td class="field">:</td>
      <td colspan="2"><select name="amount" id="select" style="width:300px; height:40px;" value="<?php echo $amount ?>" required/> 
        <option value="">- - Select - -</option>
        <option value="1">1</option>
        <option value="2">2</option>
		<option value="3">3</option>
        <option value="4">4</option>
		<option value="5">5</option>
        <option value="6">6</option>
        </select>       
      </td>
    </tr>
	
  <tr>
      <td class="field">Needed Date</td>
      <td class="field">:</td>
      <td><input type="text" name="needed_date" id="textfield12" placeholder="YY-MM-DD" style="width:300px; height:40px;" value="<?php echo $needed_date ?>" required/> </td>
     
    </tr>
    
	
	 <tr>
      <td class="field">District</td>
	  <td class="field">:</td>
      <td colspan="2"><select name="district" size="1" id="select" style="width:300px; height:40px;" value="<?php echo $district ?>" required/> 
          <option>- - Select - -</option>
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
        </select>
     </td>
   </tr>
      
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td colspan="2">
        <input name="mob_num" type="text" id="textfield5" style="width:300px; height:40px;" value="<?php echo $mob_num ?>" required/>      </td>
    </tr>
	
	<tr>
      <td height="97" class="field"><strong>Address</strong></td>
      <td class="field">:</td>
      <td colspan="2">
        <textarea name="address" id="textarea" cols="30" rows="5" required><?php echo $address ?></textarea>      </td>
    </tr>
    
    
    
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
        <input type="submit" name="update" class="sign_user" value="Update">     </td>
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