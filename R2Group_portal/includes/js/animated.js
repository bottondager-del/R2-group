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
// When the user scrolls the page, execute barFunctions 
window.onscroll = function() {barFunctions()};

function barFunctions() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("bar_percent").style.width = scrolled + "%";
}