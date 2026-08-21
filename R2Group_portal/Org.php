<?php
$page="org";include("includes/header.php");
if(!isset($_SESSION['R2_ID'])){
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
<title>R2 Group Portal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/Aldwin.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="Aldwin-light-grey">

<!-- !PAGE CONTENT! -->
<div class="Aldwin-main" style="margin-left:0px;">
<br><br>
<div class="Aldwin-content Aldwin-hide-small Aldwin-hide-medium">
<section class="slideshow">
<div class="container">
<div class="content-carrousel">
<figure class="shadow"><img src="BranchLogo/nail.jpg"></figure>
<figure class="shadow"><img src="BranchLogo/vivere.png"></figure>
<figure class="shadow"><img src="BranchLogo/french.png"></figure>
<figure class="shadow"><img src="BranchLogo/barber.png"></figure>
<figure class="shadow"><img src="BranchLogo/sugar.png"></figure>
<figure class="shadow"><img src="BranchLogo/max.png"></figure>			
</div>
</section>	
</div>
</div>
<hr>


<div class="Aldwin-col m6 Aldwin-padding">
<h5>Top Branch Stats</h5>
<p> French Tips <span class="Aldwin-small Aldwin-tag"> Nail Palour</span></p>
<div class="Aldwin-grey">
<div class="Aldwin-container Aldwin-center Aldwin-padding Aldwin-grey" style="width:75%">75%</div>
</div>
<p>Vivere Salon <span class="Aldwin-small Aldwin-tag"> Salon</p>
<div class="Aldwin-grey">
<div class="Aldwin-container Aldwin-center Aldwin-padding Aldwin-grey" style="width:50%">50%</div>
</div>

<p>asdasd<span class="Aldwin-small Aldwin-tag"></p>
<div class="Aldwin-grey">
<div class="Aldwin-container Aldwin-center Aldwin-padding Aldwin-grey" style="width:25%">+25%</div>
</div>
</div>
<div class="Aldwin-col m6 Aldwin-padding">
<h5>Other Branch Stats</h5>
<table class="Aldwin-table Aldwin-striped Aldwin-bordered Aldwin-border Aldwin-hoverable Aldwin-white">
<tr>
<td>Brancs 4</td>
<td>6.5%</td>
</tr>
<tr>
<td>Brancs 5</td>
<td>15.7%</td>
</tr>
<tr>
<td>Brancs 6</td>
<td>5.6%</td>
</tr>
<tr>
<td>Brancs 7</td>
<td>2.1%</td>
</tr>
<tr>
<td>Brancs 8</td>
<td>1.9%</td>
</tr>
<tr>
<td>Brancs 9</td>
<td>1.5%</td>
</tr>
</table><br>
<button class="Aldwin-button Aldwin-dark-grey">More branch  <i class="fa fa-arrow-right"></i></button>
</div>
<hr>

<div class="Aldwin-container">
<h5>Recent Comments</h5>
<div class="Aldwin-row">
<div class="Aldwin-col m2 text-center">
<img class="Aldwin-circle" src="anonymous1.png" style="width:96px;height:96px">
</div>
<div class="Aldwin-col m10 Aldwin-container">
<h4>Aldwin <span class="Aldwin-opacity Aldwin-medium">Sep 29, 2014, 9:12 PM</span></h4>
<p>Keep up the GREAT work! I am cheering for you!!</p><br>
</div>
</div>

<div class="Aldwin-row">
<div class="Aldwin-col m2 text-center">
<img class="Aldwin-circle" src="anonymous1.png" style="width:96px;height:96px">
</div>
<div class="Aldwin-col m10 Aldwin-container">
<h4>Aldwin <span class="Aldwin-opacity Aldwin-medium">Sep 28, 2014, 10:15 PM</span></h4>
<p>Keep up the GREAT work! I am cheering for you!!</p><br>
</div>
</div>
</div>
<br>

<div class="Aldwin-container Aldwin-dark-grey Aldwin-padding-32">
<div class="Aldwin-row">

<div class="Aldwin-container Aldwin-third">
<h5 class="Aldwin-bottombar Aldwin-border-green">Owner</h5>
<p>{Text}</p>
<p>{Text}</p>
<p>{Text}</p>
</div>

<div class="Aldwin-container Aldwin-third">
<h5 class="Aldwin-bottombar Aldwin-border-red">Head Manager</h5>
<p>{Text}</p>
<p>{Text}</p>
<p>{Text}</p>
</div>

<div class="Aldwin-container Aldwin-third">
<h5 class="Aldwin-bottombar Aldwin-border-orange">Employer</h5>
<p>{Text}</p>
<p>{Text}</p>
<p>{Text}</p>
<p>{Text}</p>
</div>
</div>
</div>

  <!-- Footer -->
<footer class="Aldwin-container Aldwin-padding-16 Aldwin-white">
<center><img class="R2_cover" src="ground.jpg"></center>
</footer>

  <!-- End page content -->
</div>

</body>
</html>
