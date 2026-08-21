<?php
session_start();
if(isset($_SESSION["R2_ID"])){
	header("location: Home_R2.php");
	exit();
}
include('includes/connection.php');
$success="";
$error="";
$error1="";
if(isset($_POST['submit']))
{
	$Capha = htmlentities(mysqli_real_escape_string($con,$_POST['Capha']));
	$Capha1 = htmlentities(mysqli_real_escape_string($con,$_POST['Capha1']));
	if($Capha !== $Capha1)
		{
			$error="<pre class='textfrgt'>Pls type the code proper!!</pre>";
		}
		else{
	if(isset($_POST['id']))
	{
		
		
		$id=mysqli_escape_string($con,filter_var(strip_tags($_POST['id']),FILTER_VALIDATE_id));
		$sql="SELECT R2_ID FROM users WHERE R2_ID='$id'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result);
		
		if(mysqli_num_rows($result)==0)
		{
			$error1="<pre class='textfrgt'>This id address doesn't exists!!</pre>";
		}
		else{
		$code=rand(999,999999);
		$rand = rand(1, 6); 
			if($rand == 1)
				$codes = "tFk";
			else if($rand == 2)
				$codes = "LQi";
			else if($rand == 3)
				$codes = "bMn";
			else if($rand == 4)
				$codes = "Dje";
			else if($rand == 5)
				$codes = "sKq";
			else if($rand == 6)
				$codes = "WaR";
		$password_code=str_shuffle($codes . $code);
		$hash_password = hash('sha256', $password_code);
		
		require 'mailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'Dwinjay16@gmail.com';                 // SMTP username
        $mail->Password = 'Aldwinjay16';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $to=$id;
        $mail->setFrom('hiCODE@gmail.com', 'hiCODE');
        $mail->addAddress($to);     // Add a recipient

		$mail->isHTML(true);                                  // Set id format to HTML

		$mail->Subject = 'Verification Code';
		$mail->Body = "
		<body style='line-height:25px;background: linear-gradient(#c4c5d2, #3d3740);width: 60%;padding: 30px;'>
		<h1 style='text-align: center;font-size: 24px;font-family: inherit;color: black;text-shadow: 0px 3px 7px black;'>hiCODE:Security Code</h1>
		<p style='font-size: 17px;font-family: -webkit-body;'>id : $id</p>
		<p style='font-weight: bold;font-size: 17px;font-family: -webkit-body;'>CODE : $password_code</p><br><br>
		
		Please click this link to Login into your Account ------------------<br><br><br>
		
		<a style='color: #ac8dcf;'href='http://localhost/LEarning%20site/login.php'>Click here to Log in to your Account</a>
		</body>
		";

		if($mail->send())
		{
			$sql="UPDATE users SET recovery_account='$hash_password' WHERE R2_ID='$id'";
			$result=mysqli_query($con,$sql);
			$success= "<i class='fa fa-spinner fa-spin' style='font-size:24px'></i>";
			header("location:http://localhost/LEarning%20site/codeverify.php?id=$id");
		  }
		}
	  }
   }
}

?>
<?php 
$codex=rand(9,999);
$rand = rand(1, 13); 
 if($rand == 1)
	$coder ="kYf";
else if($rand == 2)
	$coder ="b4Fe";
else if($rand == 3)
	$coder ="YeL";
else if($rand == 4)
	$coder ="rXZ";
else if($rand == 5 )
	$coder ="UfGS";
else if($rand == 6 )
	$coder ="alJK";
else if($rand == 7 )
	$coder ="UkK";
else if($rand == 8 )
	$coder ="TYf";
else if($rand == 9 )
	$coder ="Jky2";
else if($rand == 10)
	$coder ="ujbs";
else if($rand == 11 )
	$coder ="rvsx";
else if($rand == 12)
	$coder ="KLMu";
else if($rand == 13)
	$coder ="Az1D";
$codrad =str_shuffle($coder . $codex);
?>
<!DOCTYPE html>
<html>
<title>HiCODE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Aldwin.css">
<link rel="shortcut icon" type="image/png" href="favicon.png" sizes="32x32"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$('#id, #passowrd, #a').bind("cut copy paste", function(e){
		e.preventDefault();
	});
});
</script>
<style>
body,h1,h2,h3,h4,h5,h6 {
	font-family: "Montserrat", sans-serif;margin: 0;
}
body{
    background: linear-gradient(white,#ffeded,#b69ff5,#5f588e,#30303c);
	background-repeat: no-repeat;
    background-size: cover;
	background-attachment:fixed;
	
}
.loginform input{
	width:100%;
	margin-bottom:10px;
}
.loginform input[type="text"], input[type="id"], input[type="password"]
{
	background:transparent;
	border:none;
	border-bottom:1px solid #fff;
	outline:none;
	height:25px;
	color:#fff;
	font-size:14px;
}
.loginform select{
	background:transparent;
	width:100%;
	margin-bottom:10px;
	color:white;
	border:none;
	border-bottom:1px solid #fff;
	outline:none;
}
.loginform option{
color:#000;
}
.loginform input[type="submit"]
{
	cursor:pointer;
	background:#252222;
	color:white;
	border:none;
	outline:none;
	font-size:16px;
	border-radius:10px;
	height:30px;

}
.loginform input[type="submit"]:hover
{
	cursor:pointer;
	background:#ffc107;
	color:#000;
}
.loginform a
{
	text-decoration:none;
	font-size:12px;
	line-height:10px;
	color:darkgrey;
}
.loginform p
{
	text-decoration:none;
	font-size:16px;
	color:darkgrey;
	font-weight:bold;
}
.loginform a:hover
{
color:#ffc107;	
}
.loginround{
     width: 320px;
    height: 420px;
    color: #fff;
	background: #000;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 40px 30px;
	box-shadow: 0 0 1px 0px white;
	  
}
.loginround h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
	border:1px solid;
}
.h1alert{
	      text-align: center;
    font-weight: 100;
    font-size: 15px;
    color: black;
        font-family: -webkit-body;

}
.alert1{
    top: 0%;
    background: #000000c7;
    right: 0;
    position: fixed;
    width: 100%;
    height: 100vh;
    z-index: 2;
	
}
.closes{
	       color: black;
    font-size: 20px;
    font-weight: bold;
    position: absolute;
    top: 15%;
    right:2%;
    padding: 3px;
}
.bodyalert{
position: absolute;
    top: 15%;
    padding: 14px;
    background: #d2c0ea;
    width: 100%;
    height: 80px;
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
    border-radius: 10px;
}
@media only screen and (max-width:601px){
	.bodyalert{
		  width: 99%;
    left: 1px;
	}
	.closes{
		    color: black;
    font-size: 25px;
    font-weight: bold;
    position: absolute;
    top: 14%;
    right: 2%;
    padding: 3px;
	}
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
    background: linear-gradient(#ffffff, #8cc72b);
    font-family: -webkit-body;
}
.backs{
	text-decoration: none;
    color: black;
    font-size: 17px;
    border: 1px solid;
    padding: 5px;
    border-radius: 10px;
}
.backs:hover{
	    color: #ffffff;
    background: grey;
}
</style>
<body>
<div class="Aldwin-display-topright Aldwin-padding-large Aldwin-xlarge">
<a class="backs" href="index.php"><i class="fa fa-arrow-circle-left"></i> Log in</a>
</div>
<img src="R2_logo.jpg"class="Aldwin-display-topleft Aldwin-margin">

<div class="loginround Aldwin-bottombar Aldwin-topbar">
<h1>Forgot Password</h1>
<form  action="" method="post" autocomplete="off"  class="loginform">
<span style="color:black;"><?php if(isset($error1)){ echo $error1;}?></span>
<p><i class="fa fa-user"></i> id</p>
<input type="text" name="id" placeholder="Enter Valid ID" required>
<span style="color:black;"><?php if(isset($error)){ echo $error;}?></span>
<input  type="text" name="Capha1" id="a" style="background:url(images/t.jpg);color: black;text-align:center; border: 1px solid;padding: 20px;font-size: 35px;"  readonly value="<?php echo $codrad ?>">
<input 	type="text" name="Capha" style="text-align:center;" placeholder="Copy the Code here">
<center><button type="submit" name="submit" value="submit" class="Aldwin-padding Aldwin-button Aldwin-round Aldwin-red">Submit</button></center>

</form>
</div>
</body>
</html>
