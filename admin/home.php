<!DOCTYPE html>
<?php
session_start();
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
			<li> Manage Donor </li>
				<h1>Manage Blood Bank</h1>
		  </ol>
		  <div class="row animfade">
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