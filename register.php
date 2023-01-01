<head>
	<title>REGISTRATION</title>
	<link rel="icon" type="image/x-icon" href="logo.png">
	<?php     
include('connect.php');
if(isset($_REQUEST['submit'])!='')
{
if($_REQUEST['name']=='' || $_REQUEST['cpass']=='' || $_REQUEST['password']=='')
{
echo '<script>alert("please fill the empty field.")</script>';
}
$sql="select * from register where username='$_REQUEST[name]'";
$get_user=mysqli_query($con,$sql);
 if(mysqli_num_rows($get_user)>0)
 {
  echo '<script>alert("Already Registered!")</script>';
 }
else
{
$sql="insert into register(username,password) values('".$_REQUEST['name']."', '".$_REQUEST['password']."')";
if(mysqli_query($con,$sql))
{
	echo '<script>alert("Thank you for Registering")</script>';
header("Location: http://localhost/home.php");
}
else
{
echo '<script>alert("There is some problem in inserting record")</script>';
}

}
}

?>
	<script>
		function user_check() {
			var c;
				c = document.getElementById("t3").value;
				var n = /^[A-Za-z]+$/;
				if (!n.test(c)) {
					document.getElementById('l1').innerHTML="PLEASE ENTER ONLY ALPHABETS IN USERNAME FIELD!";
				}
				if (n.test(c)) {
					document.getElementById('l1').innerHTML=" ";
				}
		}
		function pass_check(){
			var f;
				f = document.getElementById("t4").value;
			var y = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
			if (!y.test(f)) {
				document.getElementById('l2').innerHTML="'Upper case, Lower case, Special character and Numeric letter are required in Password filed!";
				}
			if (y.test(f)) {
				document.getElementById('l2').innerHTML=" ";
			}
			}
		function pass_confirm(){
			z=document.getElementById("t4").value;
			m=document.getElementById("t5").value;
			if(z!=m)
			{
				document.getElementById('l3').innerHTML="Passwords are NOT matching";
			}
			if(z==m)
			{
				document.getElementById('l3').innerHTML="Passwords are matching";
			}
		}
		function reg(){
			var e, f, flag=0;
				e = document.getElementById("t3").value;
				f = document.getElementById("t4").value;
				g=document.getElementById("t5").value;
				var x = /^[A-Za-z]+$/;
				var y = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
				if (e == "") {
					alert("PLEASE ENTER A USERNAME");
					f=1;
				}
				if (f == "") {
					alert("PLEASE ENTER A PASSWORD");
					f=1;
				}
				if (!y.test(f)) {
					alert("'Upper case, Lower case, Special character and Numeric letter are required in Password filed!");
					f=1;
				}
				if (!x.test(e)) {
					alert("PLEASE ENTER ONLY ALPHABETS IN USERNAME FIELD!");
					f=1;
				}
				if(f!=g)
				{
					alert("Passwords are NOT matching");
					f=1;
				}
				if(flag==0)
				{
					alert("Thank you for Registering");
				}
		}
	</script>
</head>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" name="registration" method="post" action="">
				<div class="login__field">
					<input type="text" id="t3" onKeyUp="user_check()" class="login__input" placeholder="Username" name="name">
				</div>
				<label id="l1">Please enter a username</label>
				<div class="login__field">
					<input type="password" id="t4" onKeyUp="pass_check()" class="login__input" placeholder="Password" name="password">
				</div>
				<label id="l2">Please enter a password</label>
                <div class="login__field">
					<input type="password" id="t5" onKeyUp="pass_confirm()"class="login__input" placeholder="Confirm Password" name="cpass">
				</div>
				<label id="l3">Please re-enter your password</label>
				<button class="button login__submit" onclick="reg()" name="submit">
					<span class="button__text">Register</span>
				</button>				
			</form>
			
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<style>

* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;	
	font-family: Raleway, sans-serif;
}
label{
	font-size: x-small;
	color: #c42d5f;
}
body {
	background: linear-gradient(90deg, #f4c5d5, #cc6bc4);		
}

.container {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
}

.screen {		
	background: linear-gradient(90deg, #f4c5d5, #cc6bc4);		
	position: relative;	
	height: 600px;
	width: 360px;	
	box-shadow: 0px 0px 24px #965686;
}

.screen__content {
	z-index: 1;
	position: relative;	
	height: 100%;
}

.screen__background {		
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);	
}

.screen__background__shape {
	transform: rotate(45deg);
	position: absolute;
}

.screen__background__shape1 {
	height: 520px;
	width: 520px;
	background: rgb(248, 248, 248);	
	top: -50px;
	right: 120px;	
	border-radius: 0 72px 0 0;
}

.screen__background__shape2 {
	height: 220px;
	width: 220px;
	background: #ac63a6;	
	top: -172px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape3 {
	height: 540px;
	width: 190px;
	background: linear-gradient(270deg,  #c42d5f, #cc6bb4);
	top: -24px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape4 {
	height: 400px;
	width: 200px;
	background: #9e347b;	
	top: 420px;
	right: 50px;	
	border-radius: 60px;
}

.login {
	width: 320px;
	padding: 30px;
	padding-top: 100px;
}

.login__field {
	padding: 20px 0px;	
	position: relative;	
}

.login__icon {
	position: absolute;
	top: 30px;
	color: #b57598;
}

.login__input {
	border: none;
	border-bottom: 2px solid #d4d1d4;
	background: none;
	padding: 10px;
	padding-left: 24px;
	font-weight: 700;
	width: 75%;
	transition: .2s;
}

.login__input:active,
.login__input:focus,
.login__input:hover {
	outline: none;
	border-bottom-color: #9e6785;
}

.login__submit {
	background: rgb(255, 255, 255);
	font-size: 14px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #e8d3e0;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 100%;
	color: #9d488b;
	box-shadow: 0px 2px 2px #965681;
	cursor: pointer;
	transition: .2s;
}
.login__submit:active,
.login__submit:focus,
.login__submit:hover {
	border-color: #9e6795;
	outline: none;
}

.button__icon {
	font-size: 24px;
	margin-left: auto;
	color: #b575b0;
}

</style>