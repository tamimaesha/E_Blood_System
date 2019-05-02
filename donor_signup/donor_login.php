<?php include("../includes/session.php"); ?>
<!DOCTYPE>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Head section including    -->
        <?php include("includes/head.php"); ?>
</head>

<body>
<div class="container" id="customcontainer"> <!--Start Full Container section -->


<div class="row" id="topbar">  <!--Start top section-->
     <?php include("includes/top.php"); ?>
</div><!--End top section-->


<div class="row" id="header"> <!--Start header section -->
    <?php include("includes/header.php"); ?> 
</div> <!--End header section -->

<div class="row" id="menu-wrap"><!--Start Menu section -->
			  <?php include("includes/menu.php"); ?>              
</div><!--End Menu section -->


<div class="row" id="wrapper"><!--Start wrapper section -->




<div id="d_q" style="margin-top:60px; width:100%; overflow:hidden; border-left:1px solid #ffcccc; 
border-right:1px solid #ffcccc; border-radius:40px;">

				<!--Form container start-->

 
 
 <div class="col-md-6"><center><img src="../images/dr.png" style="margin-top:100px;"></center></div>

 
 <div class="col-md-6">
    <div>
      <h2 class="form_title">Donor &nbsp;&nbsp;Login</h2>
    </div>
	

    <!--Form  start-->
    <div class="col-md-12" id="apDiv1">
    
    <?php echo message();?>
	
<form id="form1" name="form1" method="post" action="login.php">
  <table class="tbl_form" width="461" height="179">
    <tr>
      
      </tr>
  
    <tr>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr>
      <td class="field">Your Email</td>
      <td class="field">:</td>
      <td>
       <div id="email_form" style="align:center;">
        <input type="text" name="email" id="email" value="" class="input_email" required>
      </div></td>
    </tr>
    <tr>
      <td class="field">Password</td>
      <td class="field">:</td>
      <td>
        <div id="password_form" style="align:center;">
        <input type="password" name="password" id="password" value="" class="input_password" required>
      </div> </td>
    </tr>
    <tr>
      
    </tr>
     <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
	  
        <input type="submit" name="login" class="sign_user" value="Login" style="margin-left:30px; width:93%;">   </td>
    </tr>
  </table>
  </form>
</div></center>

</div>

    <!--form ends--> 



</div><!--End d_q class-->

</div>	<!--End wrapper section -->





<div class="row"><!--Start last section -->
<?php include("includes/last.php"); ?>
</div><!--End last section -->



<div class="row"><!--Start copyright section -->
<?php include("includes/copyright.php"); ?>
</div><!--End copyright section -->


</div><!--End Full Container section -->
</body>
</html>