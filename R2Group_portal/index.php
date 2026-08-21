<?php
include("includes/connection.php");
session_start();
if(isset($_SESSION["R2_ID"])){
	header("location: Home_R2.php");
	exit();
}
if(isset($_POST['login']))
{

$error1="";
$error2="";

if(empty($_POST['pass']))
{
	$error="<pre class='textfrgt'>Please enter all the details first</pre>";
}
else{
$R2_ID=$_POST['id'];
$password=$_POST['pass'];
$R2_ID=mysqli_escape_string($con,filter_var(strip_tags($R2_ID),FILTER_SANITIZE_STRIPPED));
$password=mysqli_escape_string($con,filter_var(strip_tags($password),FILTER_SANITIZE_STRIPPED));
$sql="SELECT * FROM login WHERE R2_ID='$R2_ID' AND Password='$password'";
$result=mysqli_query($con, $sql) or die("Your query is not right");
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);
if($count==1){
		$_SESSION['R2_ID']=$R2_ID;
		header('Location:Home_R2.php');
}else{
$sql="SELECT * FROM login ORDER by id";
$result=mysqli_query($con, $sql) or die("Your query is not right");
$row1=mysqli_fetch_array($result);
$r2_ID = $row1['R2_ID'];
$user_p = $row1['Password'];
if($R2_ID !== $r2_ID AND $password !== $user_p){
	$error="<pre class='textfrgt'>Wrong input ID And Password</pre>";

}else{
if($password !== $user_p)
{
$error1="<pre class='textfrgt'>Wrong input Password</pre>";
}

if($R2_ID !== $r2_ID){
	$error2="<pre class='textfrgt'>Wrong input ID</pre>";
}
}
}
}
}
?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/Aldwin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
    margin: 0;
    padding: 0;
    background: linear-gradient(45deg, #656565, black);
	background-attachment:fixed;
    background-size: cover;
    background-position: center;
    font-family: sans-ser);
}

.loginbox{
    width: 320px;
    height:400px;

	    /*background: linear-gradient(#000000c9,#ffffff2e);*/
		    box-shadow: 0 0 20px 0px black;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 60px 30px;
	
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
	font-size:17px;
	text-align:center;
	color:#b5b5b5;
}

.loginbox input{
    width: 100%;
    margin-bottom: 0px;
}


.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 0px;
    color: #07fdff;
}

.loginbox a:hover
{
    color: #ffc107;
}
.textfrgt{
	    display: block;
    padding: 5.0px;
    margin: 0 0 10px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    word-break: break-all;
    word-wrap: break-word;
    background-color: #f5f5f5;
    border:none;
    border-radius: 4px;
   background: linear-gradient(#ffffff, #aabd8b);
    font-family:inherit;
	text-align:center;
}
</style>
</head>
<body>
<div class="loginbox">
<img src="user_logo1.png" class="avatar">
<h2 class="Aldwin-center">Company Portal</h2>
<form action="index.php" method="POST" autocomplete="off">
<?php if(isset($error)){ echo $error;}?></span>
<?php if(isset($error2)){ echo $error2;}?></span>
<div class="Aldwin-row Aldwin-section">
  <div class="Aldwin-col" style="width:50px"><i class="Aldwin-xxlarge fa fa-user"></i></div>
    <div class="Aldwin-rest">
      <input class="Aldwin-input" name="id" type="text" placeholder="Enter Valid ID">
    </div>
</div>
<div class="Aldwin-row Aldwin-section">
<?php if(isset($error1)){ echo $error1;}?></span>
  <div class="Aldwin-col" style="width:50px"><i class="Aldwin-xxlarge fa fa-lock"></i></div>
    <div class="Aldwin-rest">
      <input class="Aldwin-input" name="pass" type="password" placeholder="Enter Password">
    </div>
</div>

<center><span style="font-style: italic;"class="Aldwin-small"><b>Note:</b> Use your valid ID for user id and also same us for password</span>
</br></br>
<button style="width:150px"type="submit" name="login" class="Aldwin-padding Aldwin-button Aldwin-round Aldwin-red">login</button></center>
</form>     
</div>
</body>
</html>