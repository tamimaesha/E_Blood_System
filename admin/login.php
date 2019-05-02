
<!DOCTYPE html>

<head>
    <title> SIPI Website Login</title>
    <!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head> 

<body>
   

<!--=== Content Part ===-->    
<div class="container">
    <!--Reg Block-->
    <div class="col-md-4 col-md-offset-1" style="margin:15%;">
	<div class="reg-block">
        <div class="reg-block-header">
            <h2>Sign In</h2>		
        </div>
		
        <form action="login_process.php" method="post" name="login-form" id="login-form">
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" name="email" class="form-control" placeholder="Email" required="required">
            </div>
            <div class="input-group margin-bottom-20">
               <span class="input-group-addon"><i class="fa fa-lock"></i></span>
               <input type="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
           <hr>
        <div class="row">
                <div class="col-md-4 col-md-offset-1">
                  <input type="submit" name="submit" class="btn-u btn-block" value="Login">
                </div>
            </div>
	    </form>
    </div>
	</div>
    <!--End Reg Block-->
</div><!--/container-->
<!--=== End Content Part ===-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
</body>
</html> 