<?php
	
	
?>

<html>
	<head>
		<title>Sign In</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #00303d;
			}
			.signin{
				height: 600px;
				width: 600px;
				background-color: black;
				margin: 30px 0px 0px 400px;
				border-radius: 50px;
			}
			.cross{
				height: 30px;
				width: 30px;
			}
			.cross img{
				height: 30px;
				width: 30px;
				margin: 20px 0px 0px 550px;
			}
			.pics img{
				margin: 0px 0px 0px 150px;
			}
			.pics img{
				height: 158px;
				width: 301px;
			}
			.sign{
				margin: 40px 0px 0px 250px;
			}
			.sign p{
				font-size: 25px;
				font-weight: bold;
				color: #FF7D00;
			}
			.sign label{
				font-size: 18px;
				margin: 30px 0px 30px 0px;
			}
			.user{
				margin: 20px 0px 20px 110px;
			}
			.user img{
				height: 34px;
				width: 26px;
				margin: -15px 0px 0px 0px;
			}
			.user input{
				border: 2px solid #FF7D00;
				height: 35px;
				width: 380px;
				border-radius: 50px;
				padding: 0px 20px;
				font-size: 20px;
				outline: none;
				margin: 0px 0px 0px 15px;
			}
			.user input:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00; 
			}
			.user label{
				font-size: 18px;
				margin: 30px 0px 0px 120px;
			}
			.pas{
				margin: 20px 0px 20px 110px;
			}
			.pas img{
				height: 28px;
				width: 28px;
				margin: -15px 0px 0px 0px;
			}
			.pas input{
				border: 2px solid #FF7D00;
				height: 35px;
				width: 380px;
				border-radius: 50px;
				padding: 0px 20px;
				font-size: 20px;
				outline: none;
				margin: 0px 0px 0px 15px;
			}
			.pas input:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00; 
			}
			.pas label{
				font-size: 18px;
				margin: 30px 0px 0px 120px;
			}
			.rem{
				text-align: center;
				margin: 0px 40px 0px 25px;
			}
			.btn{
				margin: 30px 0px 0px 0px;
				text-align: center;
			}
			.btn button{
				width: 120px;
				height: 40px;
				border-radius: 50px;
				color: black;
				font-size: 20px;
				background-color: white;
				border: 1px solid white;
				transition: 1s;
			}
			.btn button:hover{
				cursor: pointer;
				background-color: #FF7D00;
				border: 1px solid #FF7D00;
				transform: scale(1.2);
			}
			.acc{
				margin: 30px 0px 0px 10px;
			}
			.acc p{
				font-size: 20px;
			}
			.acc a{
				color: white;
			}
			.acc .for{
				margin: 0px 0px 0px 120px;
			}
		</style>
	</head>
	
	<body>
		<div class="signin">
		    <form action="signin_handler.php" method="POST">
				<div class="cross">
					<a href="home.php"><img src="../app/image/cross.png"></a>
				</div>
				
				<div class="pics">
					<img src="../app/image/ghorbari1.png">
				</div>
			
				<div class="sign">		
					<p>Sign In</p>
					<label><?php echo $_GET['msgerr']?></label>
				</div>	 
				
				<div class="user">
					<img src="../app/image/username.png" align="center">
					<input type="text" name="email" value="<?php if(isset($_COOKIE["email"]))  {echo $_COOKIE["email"];}?>" placeholder="Enter your email"/>
					<label><?php echo $_GET['msge']?></label>
				</div>
			
				<div class="pas">		
					<img src="../app/image/password.png" align="center">
					<input type="password" name="password" value="<?php if(isset($_COOKIE["pass"]))  {echo $_COOKIE["pass"];}?>" placeholder="Enter your password"/>
					<label><?php echo $_GET['msgp']?></label>				
				</div>
				
				<div class="rem">
					<input type="checkbox" name="remember" <?php if(isset($_COOKIE["email"])) {?> <?php }?>/>Remember Me
				</div>
				
				<div class="btn">		
					<button type="submit" name="login">Login</button>
				</div>	
		
				<div class="acc">	
					<p>Don't have an account? <a href="registration.php">Register</a>
					<a class="for" href="forgotpass.php">Forgot Password?</a>
				</div>
			</form>
		</div>	
	</body>
</html>