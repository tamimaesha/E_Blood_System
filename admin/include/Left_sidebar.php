<div class="templatemo-sidebar">
    <ul class="templatemo-sidebar-menu" id="myMenu" style="text-align:left;">
        <li><a href="home.php"><i class="fa fa-home"></i> Home </a></li>		
        <li class="sub" >
            <a href="javascript:;">
                <i class="fa fa-bars"></i>Donor <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
                <li><a href="add_donor.php"><i class="fa fa-bars"></i> Add Donor</a></li>
			    <li><a href="manage_donor.php"><i class="fa fa-bars"></i> Manage Donor</a></li>
            </ul>
        </li>
		
		
		<li class="sub" >
            <a href="javascript:;">
                <i class="fa fa-bars"></i>Patient <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
                <li><a href="add_patient.php"><i class="fa fa-bars"></i> Add Patient</a></li>
			    <li><a href="manage_patient.php"><i class="fa fa-bars"></i> Manage Patient</a></li>
            </ul>
        </li>
		 
       
        <li class="sub" >
            <a href="javascript:;">
                <i class="fa fa-bars"></i>Health Tips <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
                <li><a href="add_tips.php"><i class="fa fa-bars"></i> Add Health Tips</a></li>
			    <li><a href="manage_tips.php"><i class="fa fa-bars"></i> Manage Health Tips</a></li>
            </ul>
        </li>
		
		
		
        <li><a href="logout.php" ><i class="fa fa-sign-out"></i> Sign Out </a></li>
    </ul>
</div>
<style>
#myMenu li.active {background:#BFE8A7; color:#fff;}
#myMenu ul li.active a{ background:#A0A0A0 none; color:#fff; }
</style>
<script type="text/javascript">
$(document).ready(function() {

$('#myMenu ul li').each(function () {
if (window.location.href.indexOf($(this).find('a:first').attr('href')) > -1) {
$(this).closest('ul').closest('li').attr('class','active')
$(this).addClass('active').siblings().removeClass('active');
}
});

});

function initMenu() {
  //  $('#myMenu ul').hide(); 
    $('#myMenu > li > a').on('click', function() {
	$('.templatemo-submenu').hide(); 
        $('#myMenu ul').slideUp(1000);
        $(this).next().slideDown(1000);
    });
}
$(document).ready(initMenu);
</script>
