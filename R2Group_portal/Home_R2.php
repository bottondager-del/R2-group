<?php
$page="home"; include("includes/header.php");
if(!isset($_SESSION['R2_ID'])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<title>R2 Group Portal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table i{
	color:#6b6b4d;
}
.center {
  text-align: center;
}

.Pagana {
  display: inline-block;
}

.Pagana a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.Pagana a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.Pagana a:hover:not(.active) {background-color: #ddd;}
</style>
<body class="Aldwin-light-grey">
<!-- !PAGE CONTENT! -->
<div class="Aldwin-main" style="margin-left:0px;">
<!-- Header -->
<br><br>
<div style="padding-top:30px;"class="Aldwin-row-padding Aldwin-margin-top">
<div class="Aldwin-col m3">
<table class="Aldwin-table Aldwin-card Aldwin-white">
<tr>
<td><img style="width:100%;border-radius: 10px;"src="BranchLogo/<?php echo $Branch_logo; ?>">
 </td>
<td><span class="Aldwin-large ">Company <span class="Aldwin-medium"><?php echo $Branch_name; ?> </span><br><span class="Aldwin-small">Member since <?php echo $newDate; ?><br><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-half-empty"></i></span>
</td>
</tr>
</table>
<br>
<div class="Aldwin-row Aldwin-white Aldwin-card">
<table class="Aldwin-table">
<tr>
<td><i class="fa fa-users fa-fw Aldwin-xxlarge"></i> </td>
<td><span style="color:#a97ab5;">COMPANY SIZE</span><br>1001 - 2000 Employees</td>
</tr>

<tr>
<td><i class="fa fa-female fa-fw Aldwin-xxlarge"></i> </td>
<td><span style="color:#a97ab5;">DRESS CODE</span><br>Business (e.g. Shirts)</td>
</tr>

<tr>
<td><i class="fa fa-comment fa-fw Aldwin-xxlarge"></i> </td>
<td><span style="color:#a97ab5;">SPOKEN LANGUAGE</span><br>English and Tagalog</td>
</tr>

<tr>
<td><i class="fa fa-clock-o fa-fw Aldwin-xxlarge"></i> </td>
<td><span style="color:#a97ab5;">WORK HOURS</span><br>Varies on the role</td>
</tr>

<tr>
<td><i class="fa fa-rotate-right fa-fw Aldwin-xxlarge"></i> </td>
<td><span style="color:#a97ab5;">AVERAGE PROCESSING TIME</span><br>3 days</td>
</tr>

<tr>
<td><i class="fa fa- fa-gift fa-fw Aldwin-xxlarge"></i> </td>
<td><span style="color:#a97ab5;">BENEFITS</span><br>Education support, Loans, Medical, Miscellaneous allowance, wellness</td>
</tr>
</table>
</div><br>
<div class="Aldwin-card Aldwin-pale-green Aldwin-padding">
<h4>VISION STATEMENT</h4>
<p>We  build a portfolio of beauty and grooming  services  that offer a unique experience to our customers as we strive to surpass our competitors in innovation, quality, value, and customer service.</p>
<h4>MISSION STATEMENT</h4>
<p>It is our mission to ensure that every encounter  with our CUSTOMERS is   an experience that enhances their personality, enlivens their senses , instills well-being  and fulfills even their unexpressed wishes and needs.</p>
</div><br>
</div>

<div class="Aldwin-col m6">
<div class="Aldwin-card Aldwin-row-padding Aldwin-white">
<div class="slider Aldwin-animate-opacity">
<img  src="images/nail.jpg" style="max-height:440px;width:100%">
<div class="center">
  <div class="Pagana">
  <a class="active">1</a>
  <a>2</a>
  <a>3</a>
  </div>
</div>
</div>

<div class="slider Aldwin-animate-opacity">
<img  src="images/sports.jpg" style="max-height:440px;width:100%">
<div class="center">
  <div class="Pagana">
  <a>1</a>
  <a class="active">2</a>
  <a>3</a>
  </div>
</div>
</div>

<div class="slider Aldwin-animate-opacity">
<img src="images/french.jpg" style="max-height:440px;width:100%">
<div class="center">
  <div class="Pagana">
  <a>1</a>
  <a>2</a>
  <a class="active">3</a>
  </div>
</div>
</div>
<div class="Aldwin-padding">
<h5>Top Branch Stats</h5>
<p> French Tips <span class="Aldwin-small Aldwin-tag"> Nail Palour</span></p>
<div class="Aldwin-grey">
<div class="Aldwin-container Aldwin-center Aldwin-padding Aldwin-black" style="width:75%">75%</div>
</div>
<p>Vivere Salon <span class="Aldwin-small Aldwin-tag"> Salon</p>
<div class="Aldwin-grey">
<div class="Aldwin-container Aldwin-center Aldwin-padding Aldwin-black" style="width:50%">50%</div>
</div>

<p>asdasd<span class="Aldwin-small Aldwin-tag"></p>
<div class="Aldwin-grey">
<div class="Aldwin-container Aldwin-center Aldwin-padding Aldwin-black" style="width:25%">+25%</div>
</div>

<p>asdasd<span class="Aldwin-small Aldwin-tag"></p>
<div class="Aldwin-grey">
<div class="Aldwin-container Aldwin-center Aldwin-padding Aldwin-black" style="width:25%">+25%</div>
</div>
</div>
</div>

</div>

<div class="Aldwin-col m3">
<div class="Aldwin-card Aldwin-white">
<p class="Aldwin-tag">New Job Offer</p><br>
<table class="Aldwin-table">
<tr>
<td><img src="images/1.jpg" style="width:100%;"> </td>
<td><span style="color:black;font-weight:bold;">Barber & Stylist</span><br><span class="Aldwin-small">published on <i class="fa fa-calendar"></i> 4/23/2019 </span><br><a class="Aldwin-button Aldwin-grey"> Read more</a></td>
</tr>

<tr>
<td><img src="images/2.jpg" style="width:100%;"> </td>
<td><span style="color:black;font-weight:bold;">Nail Technicians</span><br><span class="Aldwin-small">published on <i class="fa fa-calendar"></i> 4/17/2019 </span><br><a class="Aldwin-button Aldwin-grey"> Read more</a></td>
</tr>

<tr>
<td><img src="images/5.jpg" style="width:100%;"> </td>
<td><span style="color:black;font-weight:bold;">Air Technicians Conditioner</span><br><span class="Aldwin-small">published on <i class="fa fa-calendar"></i> 4/17/2019 </span><br><a class="Aldwin-button Aldwin-grey"> Read more</a></td>
</tr>
<tr>

<tr>
<td><img src="images/6.jpg" style="width:100%;"> </td>
<td><span style="color:black;font-weight:bold;">Procurement Associate</span><br><span class="Aldwin-small">published on <i class="fa fa-calendar"></i> 4/17/2019 </span><br><a class="Aldwin-button Aldwin-grey"> Read more</a></td>
</tr>
<tr>

<tr>
<td><img src="images/3.jpg" style="width:100%;"> </td>
<td><span style="color:black;font-weight:bold;">STORE SUPERVISOR &  MANAGEMENT TRAINEE &  INVENTORY CLERK</span><br><span class="Aldwin-small">published on <i class="fa fa-calendar"></i> 4/17/2019 </span><br><a class="Aldwin-button Aldwin-grey"> Read more</a></td>
</tr>
<tr>


</table>  
  </div>
</div>
</div>






  <!-- Footer -->
<footer class="Aldwin-container Aldwin-padding-16 Aldwin-white">
<center><img class="R2_cover" src="ground.jpg"></center>
</footer>

  <!-- End page content -->
</div>
<script>
var index = 0;
showslider();

function showslider() {
  var i;
  var x = document.getElementsByClassName("slider");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  index++;
  if (index > x.length) {index = 1}    
  x[index-1].style.display = "block";  
  setTimeout(showslider, 3000); // Change image every 2 seconds
}
</script>
</body>
</html>
