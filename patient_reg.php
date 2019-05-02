<!DOCTYPE>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Head section including    -->
        <?php include 'include/head.php'; ?>
</head>

<body>
<div class="container" id="customcontainer"> <!--Start Full Container section -->


<div class="row" id="topbar">  <!--Start top section-->
     <?php include 'include/top.php'; ?>
</div><!--End top section-->


<div class="row" id="header"> <!--Start header section -->
    <?php include 'include/header.php'; ?> 
</div> <!--End header section -->

<div class="row" id="menu-wrap"><!--Start Menu section -->
			  <?php include 'include/menu.php'; ?>              
</div><!--End Menu section -->

<div class="row"><!--Start Slider section -->
  
  <img src="images/slide1.png" style="width:100%;">
  
</div><!--End Slider section -->

<div class="row" id="wrapper"><!--Start wrapper section -->




<div id="d_q" style="margin-top:20px; width:100%; overflow:hidden; border-left:1px solid #ffcccc; 
border-right:1px solid #ffcccc; border-radius:40px;">

				<!--Form container start-->

 <div class="col-md-4"><center><img src="images/br.png" style="margin-top:240px; opacity:0.60;"></center></div>
 
 <div class="col-md-8">
    <div>
      <h2 class="form_title">Patient &nbsp;&nbsp;Registration &nbsp;&nbsp;Form </h2>
    </div>
	

    <!--Form  start-->
    <div class="col-md-12" id="apDiv1">
<form id="form1" name="form1" method="post" action="insert_patient_info.php">
  <table class="tbl_form" width="461" height="431">
    
    
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td width="185" height="31" class="field">Patient Name</td>
      <td width="33" class="field">:</td>
      <td colspan="2">
        <input type="text" name="name" id="textfield"  placeholder="Your Patient's Name" style="width:300px; height:40px;"/>      </td>
    </tr>
	
	
	
	<tr>
      <td class="field">Password</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="password" name="password" id="password" value="" placeholder="Min 6 Character" style="width:300px; height:40px;" >      </td>
    </tr>
	<tr>
      <td class="field">Email</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="text" name="email" id="textfield4" placeholder="Email Will Be Your Login ID" style="width:300px; height:40px;" />      </td>
    </tr>

   
  
    <tr>
      <td class="field">Blood Group</td>
      <td class="field">:</td>
      <td colspan="2"><select name="blood_group" size="1" id="select" style="width:300px; height:40px;">
          <option>- - Select - -</option>
          <option>A+</option>
          <option>A-</option>
          <option>B+</option>
          <option>B-</option>
          <option>AB+</option>
          <option>AB-</option>
          <option>O+</option>
          <option>O-</option>
        </select></td>
    </tr>
	
	
	<tr>
      <td class="field">Amount (Unit/Bag)</td>
      <td class="field">:</td>
      <td colspan="2"><select name="amount" id="select" style="width:300px; height:40px;">
        <option>- - Select - -</option>
        <option>1</option>
        <option>2</option>
		<option>3</option>
        <option>4</option>
		<option>5</option>
        <option>6</option>
        </select>        </td>
    </tr>
	
	
	
	    
  <tr>
      <td class="field">Needed Date</td>
      <td class="field">:</td>
      <td><input type="text" name="needed_date" id="textfield12" placeholder="YY-MM-DD" style="width:300px; height:40px;"/></td>
     
    </tr>
    
	
	 <tr>
      <td class="field">District</td>
	  <td class="field">:</td>
      <td colspan="2"><select name="district" size="1" id="select" style="width:300px; height:40px;">
          <option>- - Select - -</option>
          <option>Dhaka</option>
          <option>Chittagong</option>
          <option>Comilla</option>
          <option>Barisal</option>
          <option>Khulna</option>
          <option>Sylhet</option>
          <option>Rangpur</option>
        </select></td>
    </tr>
   
    
      
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td colspan="2">
        <input name="mob_num" type="text" id="textfield5" value="+880" style="width:300px; height:40px;" />      </td>
    </tr>
	
	<tr>
      <td height="97" class="field">Hospital Address</td>
      <td class="field">:</td>
      <td colspan="2">
        <textarea name="hospital" id="textarea" cols="30" rows="5"></textarea>      </td>
    </tr>
    
    
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
        <input type="submit" name="submit" id="sign_user" value="Submit">     </td>
    </tr>
  </table>
  </form>
</div>

    <!--form ends--> 


</div>
</div><!--End d_q class-->

</div>	<!--End wrapper section -->





<div class="row"><!--Start last section -->
<?php include 'include/last.php'; ?>
</div><!--End last section -->



<div class="row"><!--Start copyright section -->
<?php include 'include/copyright.php'; ?>
</div><!--End copyright section -->


</div><!--End Full Container section -->
</body>
</html>