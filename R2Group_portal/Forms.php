<?php
$page="Forms";include("includes/header.php");
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

.a-nav{
    font-size: 17px;
    padding: 5px;
}

.a-nav:hover{
    font-size: 17px;
    color: #4CAF50!important;
}
#SearchMenu {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#SearchMenu:focus {outline: 3px solid #ddd;}
</style>
<body class="Aldwin-white">
<br><br>
<!-- !PAGE CONTENT! -->
<div class="Aldwin-main">
<div style="padding-top:20px;" class="Aldwin-row ">
<header>
<h1 class="Aldwin-center Aldwin-padding-16 Aldwin-light-grey">Head Office Forms</h1>
</header>
<!-- Search Menu -->
<div class="Aldwin-dropdown-hover Aldwin-margin">
<button class="Aldwin-bar-item Aldwin-button Aldwin-border Aldwin-center  Aldwin-hide-large">Search Forms <i class="fa fa-carret"></i></button>
<div id="myDropdown" class="Aldwin-dropdown-content Aldwin-bar-block Aldwin-card-4">
<input type="text" placeholder="Search.." id="SearchMenu" onkeyup="filterFunction()">
<a class="Aldwin-bar-item tablink a-nav" onclick="openLink(event, '1')">HR Forms</a>
<a class="Aldwin-bar-item tablink a-nav" onclick="openLink(event, '2')">Training Forms</a>


</div>
</div>
<!-- End -->
<div class="Aldwin-center Aldwin-text-lightgrey">
<a class="Aldwin-bar-item tablink a-nav Aldwin-hide-small" onclick="openLink(event, '1')">HR /</a>
<a class="Aldwin-bar-item tablink a-nav Aldwin-hide-small" onclick="openLink(event, '2')">Training /</a>
<a class="Aldwin-bar-item tablink a-nav Aldwin-hide-small" onclick="openLink(event, '3')">Recuitment /</a>
<a class="Aldwin-bar-item tablink a-nav Aldwin-hide-small" onclick="openLink(event, '4')">Accounting /</a>
<a class="Aldwin-bar-item tablink a-nav Aldwin-hide-small" onclick="openLink(event, '5')">MIS /</a>
<div class="Aldwin-dropdown-hover">
<a class="Aldwin-bar-item Aldwin-hide-small">Trunkline <i class="fa fa-carret"></i> /</a>
<div class="Aldwin-dropdown-content Aldwin-bar-block Aldwin-card-4">
<a onclick="openLink(event, '6')"class="Aldwin-bar-item Aldwin-button tablink">Trunkline 1</a>
<a onclick="openLink(event, '7')" class="Aldwin-bar-item Aldwin-button tablink">Trunkline 2</a>
<a onclick="openLink(event, '8s')" class="Aldwin-bar-item Aldwin-button tablink">Trunkline 3</a>
<a onclick="openLink(event, '9')" class="Aldwin-bar-item Aldwin-button tablink">Trunkline 4</a>

</div>
</div>
<a class="Aldwin-bar-item tablink a-nav Aldwin-hide-small" onclick="openLink(event, '2')">Supply Chain /</a>
<a class="Aldwin-bar-item tablink a-nav Aldwin-hide-small" onclick="openLink(event, '2')">Marketing /</a>
<a class="Aldwin-bar-item tablink a-nav Aldwin-hide-small" onclick="openLink(event, '2')">Operations /</a>
<a class="Aldwin-bar-item tablink a-nav Aldwin-hide-small" onclick="openLink(event, '2')">Site Dev /</a>
<a class="Aldwin-bar-item tablink a-nav Aldwin-hide-small" onclick="openLink(event, '2')">Facilities /</a>
<a class="Aldwin-bar-item tablink a-nav Aldwin-hide-small" onclick="openLink(event, '2')">Finance and Adult /</a>
<a class="Aldwin-bar-item tablink a-nav Aldwin-hide-small" onclick="openLink(event, '2')">EO</a>
</div>
<div class="Aldwin-content">
<div id="1" class="Aldwin-container Formss Aldwin-animate-opaFormss">
<h3 >HR & Payroll</h3>
<br>
<table class="Aldwin-table Aldwin-striped Aldwin-white">
    <tr class="Aldwin-light-blue">
      <th>Name</th>
      <th>Positions</th>
      <th>Files</th>
    </tr>
<?php
$get_forms = "SELECT * FROM data_forms where user_position='Hr/Payroll' ORDER by id DESC"; 
$run_forms = mysqli_query($con, $get_forms);
while($rows=mysqli_fetch_array($run_forms)){
					
$user_fname_form = $rows['user_fname_form']; 
$user_lname_form = $rows['user_lname_form']; 
$user_position = $rows['user_position'];
$Pdf_name = $rows['Pdf_name'];
$Publish_date = $rows['Publish_date'];
echo "
<tr>
<td><img style='width:30px;height:30px;'src='user_logo1.png'> $user_fname_form $user_lname_form </td>
<td>$user_position </span> </td>
<td>$Pdf_name<br>$Publish_date </td>
</tr>
";
}

?>
</table><br>
</div>

<div id="2" class="Aldwin-container Formss Aldwin-animate-opaFormss" style="display:none">
<h2>Fade Outr</h2>
<p>London is the capital Formss of England.</p>
<p>It is the most populous Formss in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
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
var mySidebar = document.getElementById("mySidebar");
var overlayBg = document.getElementById("myOverlay");

function Aldwin_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function Aldwin_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>
<script>
function openside(evt, sideName) {
  var i, x, point_tabs;
  x = document.getElementsByClassName("side");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  point_tabs = document.getElementsByClassName("point_tab");
  for (i = 0; i < x.length; i++) {
    point_tabs[i].className = point_tabs[i].className.replace(" Aldwin-red", ""); 
  }
  document.getElementById(sideName).style.display = "block";
  evt.currentTarget.className += " Aldwin-red";
}
</script>
<script>
// When the user scrolls the page, execute barFunctions 
window.onscroll = function() {barFunctions()};

function barFunctions() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("bar_percent").style.width = scrolled + "%";
}
</script>\

<script>
function openLink(evt, animName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("Formss");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" Aldwin-text-blue", "");
  }
  document.getElementById(animName).style.display = "block";
  evt.currentTarget.className += " Aldwin-text-green";
}
</script>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function barFunctions() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("SearchMenu");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

</body>
</html>
