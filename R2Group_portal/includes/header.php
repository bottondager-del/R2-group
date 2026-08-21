<?php
include("includes/connection.php");
session_start();
if(!isset($_SESSION['R2_ID'])){
	header("location:index.php");
}
$R2_ID = $_SESSION['R2_ID'];
$get_user = "select * from login where R2_ID='$R2_ID'"; 
$run_user = mysqli_query($con, $get_user);
$row=mysqli_fetch_array($run_user);
					
$R2_ID = $row['R2_ID']; 
$Branch_logo = $row['Branch_Image']; 
$Branch_name = $row['Branch_name']; 
$Member_since = $row['Member_since']; 
$first_name = $row['F_name'];
$last_name = $row['L_name'];
$user_image = $row['Master_Image'];
$newDate = date(" F/d/Y", strtotime($Member_since));
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/Aldwin.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14AldwinExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.progress-container {
  width: 100%;
  height: 8px;
  background: #ccc;
}

.progress-bar {
  height: 8px;
  background:#000000;
  width: 0%;
}

</style>
</head>
<!-- Top container -->
<div class="Aldwin-bar Aldwin-top Aldwin-dark-grey Aldwin-medium"  style="z-index:2">

<!--percent bar-->
<div class="progress-container">
<div class="progress-bar" id="bar_percent"></div>
</div>
<!--end-->

<a class="Aldwin-bar-item Aldwin-button Aldwin-hover-none Aldwin-left Aldwin-hover-text-light-grey" onclick="Aldwin_open();"><img style="width:100%;width:60px;height:50px;border-radius: 10px;"src="BranchLogo/<?php echo $Branch_logo; ?>"></a>

<a style="text-decoration: none;" class="Aldwin-bar-item  Aldwin-right Aldwin-medium"><center> <img src="user_image/<?php echo $user_image; ?>" class="Aldwin-circle" style="width:28px;height:28px;"> <span class="Aldwin-small"><br>Hi, <b><?php echo $first_name; ?></b></span></center></a>

<a href="logout.php" class="Aldwin-bar-item Aldwin-button Aldwin-right Aldwin-hide-small Aldwin-hide-medium"> <i class="fa fa-sign-out Aldwin-xlarge"><br><span style="font-family: sans-serif;"class="Aldwin-small"> Logout</i></a>

<a href="#" class="Aldwin-bar-item Aldwin-right Aldwin-button Aldwin-hide-small Aldwin-hide-medium"><i class="fa fa-address-book-o Aldwin-xlarge"><br><span style="font-family: sans-serif;"class="Aldwin-small">Contact</i></a>

<a href="Employers.php" class="Aldwin-bar-item Aldwin-right Aldwin-button Aldwin-hide-small Aldwin-hide-medium"><i class="fa fa-users Aldwin-xlarge"><br><span style="font-family: sans-serif;"class="Aldwin-small">Employers</i></a>

<a href="Org.php" class="Aldwin-bar-item Aldwin-right Aldwin-button Aldwin-hide-small Aldwin-hide-medium <?php if($page=='org'){echo 'Aldwin-text-yellow';}?>"><i class="fa fa-pie-chart Aldwin-xlarge"><br><span style="font-family: sans-serif;"class="Aldwin-small">Org Chart</i></a>

<a href="Forms.php" class="Aldwin-bar-item Aldwin-right Aldwin-button Aldwin-hide-small Aldwin-hide-medium <?php if($page=='Forms'){echo 'Aldwin-text-yellow';}?>"><i class="fa fa-file-pdf-o Aldwin-xlarge"><br><span style="font-family: sans-serif;"class="Aldwin-small">Forms</i></a>

<a href="Policies.php" class="Aldwin-bar-item Aldwin-right Aldwin-button Aldwin-hide-small Aldwin-hide-medium  <?php if($page=='Policies'){echo 'Aldwin-text-yellow';}?>"><i class="fa fa-info-circle Aldwin-xlarge"><br><span style="font-family: sans-serif;"class="Aldwin-small">Policies</i></a>

<a href="Home_R2.php" class="Aldwin-bar-item Aldwin-right Aldwin-button Aldwin-hide-small Aldwin-hide-medium <?php if($page=='home'){echo 'Aldwin-text-yellow';}?>"><i class="fa fa-home Aldwin-xlarge"><br><span style="font-family: sans-serif;"class="Aldwin-small">Home</i></a>

<a class="Aldwin-bar-item Aldwin-button Aldwin-hover-none Aldwin-right Aldwin-hover-text-light-grey" onclick="Aldwin_open();"><i class="fa fa-bars Aldwin-xlarge"><br><span style="font-family: sans-serif;" class="Aldwin-small">Menu</i></i></a>

</div>

<div class="Aldwin-overlay "  style="cursor: pointer; z-index:3; display: none;" title=" click clos menu" id="myOverlay"></div>
<!-- Sidebar/menu -->
<nav class="Aldwin-sidebar Aldwin-text-black Aldwin-animate-left side" id="mySidebar"><br>
<div class="Aldwin-container Aldwin-row">
<div class="Aldwin-col s4">
<img src="user_image/<?php echo $user_image; ?>" class="Aldwin-circle Aldwin-margin-right" style="width:70px;height:70px;">
</div>
<div class="Aldwin-col s8 Aldwin-bar">
<span><strong><?php echo $first_name; ?> <?php echo $last_name; ?></strong></span><br>
<span>ID: <?php echo $R2_ID; ?></span><br>
<a href="#" class="Aldwin-bar-item Aldwin-button"><i class="fa fa-envelope"></i></a>
<a href="#" class="Aldwin-bar-item Aldwin-button"><i class="fa fa-user"></i></a>
<a href="#" class="Aldwin-bar-item Aldwin-button"><i class="fa fa-cog"></i></a>
</div>
	
</div>
<hr>
<div class="Aldwin-container">

</div>
<div class="Aldwin-bar-block">
  
<a href="#" class="Aldwin-bar-item Aldwin-button Aldwin-padding-16 Aldwin-dark-grey Aldwin-hover-black" onclick="Aldwin_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
	
<a  href="Policies.php"  class="Aldwin-bar-item Aldwin-button Aldwin-padding"><i class="fa fa-user  fa-fw"></i>&nbsp  Profile</a>
	
<a href="#" class="Aldwin-bar-item Aldwin-button Aldwin-padding Aldwin-hide-large"><i class="fa fa-users fa-fw"></i> &nbsp All Employers</a>

<a href="#" class="Aldwin-bar-item Aldwin-button Aldwin-padding Aldwin-hide-large"><i class="fa fa-info-circle fa-fw"></i> &nbsp Policies</a>
	
<a href="#" class="Aldwin-bar-item Aldwin-button Aldwin-padding Aldwin-hide-large"><i class="fa fa-pie-chart fa-fw"></i> &nbsp Organization Chart</a>
	
<a href="#" class="Aldwin-bar-item Aldwin-button Aldwin-padding Aldwin-hide-large"><i class="fa fa-phone fa-fw"></i> &nbsp Contact</a>
	
<a href="#" class="Aldwin-bar-item Aldwin-button Aldwin-padding Aldwin-hide-large"><i class="fa fa-bell fa-fw"></i> &nbsp News </a>
<a href="logout.php" class="Aldwin-bar-item Aldwin-button"> <i class="fa fa-sign-out fa-fw"></i> &nbsp Logout</a>
<br><br>
</div>
</nav>
<script  src="includes/js/animated.js"></script>

</html>