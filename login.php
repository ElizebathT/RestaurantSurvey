<html>
<head>
		<title>LOGIN</title>
		<link rel="icon" type="image/x-icon" href="logo.png">
		<?php
			include('connect.php');
			if(isset($_REQUEST['submit'])!='')
			{
				$username = $_POST['name'];
				$password = $_POST['password'];
			  
				$sql = "select * from register where username = '$username' and password = '$password'";
				$result = mysqli_query($con, $sql);
				$count = mysqli_num_rows($result);
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				mysqli_select_db($con, 'restaurant');
				
			  
				if($count == 1 ){
				  echo "<script type='text/javascript'>alert('Connected!!!!')</script>";
				  $flag=true;
				  $sql="update login set username='$username'";
				  if(mysqli_query($con,$sql))
					{
					echo 'Sucess';
					}
				  if($flag=true){ header("location:home.php");}
				 
				}
				else {
				  echo "<script type='text/javascript'>alert('User Doesn't Exits!!!!')</script>";
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
				var  d;
				d = document.getElementById("t4").value;
				var p = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
				if (!p.test(d)) {
					document.getElementById('l2').innerHTML="'Upper case, Lower case, Special character and Numeric letter are required in Password filed!";
				}
				if(p.test(d))
				{
					document.getElementById('l2').innerHTML=" ";
				}
			}
			function log_check(){
				var e, f;
				e = document.getElementById("t3").value;
				f = document.getElementById("t4").value;
				var x = /^[A-Za-z]+$/;
				var y = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
				if (e == "") {
					alert("PLEASE ENTER A USERNAME");
				}
				if (f == "") {
					alert("PLEASE ENTER A PASSWORD");
				}
				if (!y.test(f)) {
					alert("'Upper case, Lower case, Special character and Numeric letter are required in Password filed!");
				}
				if (!x.test(e)) {
					alert("PLEASE ENTER ONLY ALPHABETS IN USERNAME FIELD!");
				}
			}
		</script>
</head>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" name="login" method="post" action="#">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" id="t3" class="login__input" placeholder="User name" onkeyup="user_check()" name="name">
				</div>
				<label id="l1">Please enter your username</label>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" id="t4" class="login__input" placeholder="Password" onKeyUp="pass_check()" name="password">
				</div>
				<label id="l2">Please enter your password</label>
				<button class="button login__submit" onclick="log_check()" name="submit">
					<span class="button__text">Log In</span>
					<i class="button__icon fas fa-chevron-right"></i>
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
	padding-top: 156px;
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
label{
	font-size: x-small;
	color: #c42d5f;
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
</html>