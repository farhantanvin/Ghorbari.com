<?php
 ?>
<html>
	<head>
		<title>Registration</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #00303d;
			}
			.reg{
				height: 750px;
				width: 600px;
				background-color: black;
				margin: 10px 0px 0px 400px;
				border-radius: 50px;
				padding: 0px 0px 0px 10px;
			}
			.titt p{
				font-size: 25px;
				font-weight: bold;
				color: #FF7D00;
				text-align: center;
			}
			.titt img{
				height: 30px;
				width: 30px;
				margin: -40px 0px 0px 550px;
			}
			.pics p{
				font-size: 20px;
			}
			.pics img{
				width: 70px;
				height: 70px;
			}
			.pics label{
				font-size: 18px;
			}
			.name{
				margin: 20px 50px 0px 0px;
			}
			.name p{
				float: left; 
				font-size: 20px;
				margin: 0px 130px 0px 0px;
			}
			.name::after{
				content: "";
				display: table;
				clear: both;
			}
			.name input{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 350px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.name input:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00; 
			}
			.name label{
				font-size: 18px;
				margin: 0px 0px 0px 280px;
			}
			.uname{
				margin: 20px 50px 0px 0px;
			}
			.uname p{
				float: left; 
				font-size: 20px;
				margin: 0px 90px 0px 0px;
			}
			.uname::after{
				content: "";
				display: table;
				clear: both;
			}
			.uname input{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 350px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.uname input:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00; 
			}
			.uname label{
				font-size: 18px;
				margin: 0px 0px 0px 205px;
			}
			.email{
				margin: 20px 50px 0px 0px;
			}
			.email p{
				float: left; 
				font-size: 20px;
				margin: 0px 130px 0px 0px;
			}
			.email::after{
				content: "";
				display: table;
				clear: both;
			}
			.email input{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 350px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.email input:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00; 
			}
			.email label{
				font-size: 18px;
				margin: 0px 0px 0px 255px;
			}
			.pass{
				margin: 20px 50px 0px 0px;
			}
			.pass p{
				float: left; 
				font-size: 20px;
				margin: 0px 95px 0px 0px;
			}
			.pass::after{
				content: "";
				display: table;
				clear: both;
			}
			.pass input{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 350px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.pass input:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00; 
			}
			.pass label{
				font-size: 18px;
				margin: 0px 0px 0px 210px;
			}
			.gen{
				margin: 20px 50px 0px 0px;
			}
			.gen p{
				float: left; 
				font-size: 20px;
				margin: 0px 115px 0px 0px;
			}
			.gen::after{
				content: "";
				display: table;
				clear: both;
			}
			.gen label{
				font-size: 18px;
				margin: 0px 0px 0px 121px;
			}
			.mob{
				margin: 40px 50px 0px 0px;
			}
			.mob p{
				float: left; 
				font-size: 20px;
				margin: 0px 125px 0px 0px;
			}
			.mob::after{
				content: "";
				display: table;
				clear: both;
			}
			.mob input{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 350px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.mob input:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00; 
			}
			.mob label{
				font-size: 18px;
				margin: 0px 0px 0px 245px;
			}
			.trm{
				text-align: center;
				margin: 20px 50px 0px 0px;
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
		</style>	
	</head>
	
	<body>
		<div class="reg" id="reg">
			<form action="registration_handler.php" method="POST" enctype="multipart/form-data" onsubmit="Validate()">
				<div class="titt">
					<p>Registration Form</p>
					<a href="signin.php"><img src="../app/image/cross.png" height="30" width="30"></a></td>
				</div>
				
				<div class="pics">
					<p>Choose an image: </p>
					<img src="../app/image/user.png" alt="upload image" value="<?php echo $_SESSION['file'];?>">
					<input type="file" name="file" id="file"/>
					<label><?php echo $_GET['msgimage']?></label>
				</div>
				
				<div class="name">
					<p>Name:</p>
					<input type="text" name="name" id="name" value="<?php echo $_SESSION['name'];?>" placeholder="Enter Your Name"/>
					<label><?php echo $_GET['msgname']?></label>
				</div>
				
				<div class="uname">
					<p>Username:</p>
					<input type="text" name="uname" value="<?php echo $_SESSION['uname'];?>" placeholder="ie: Username123/Username_123"/>
					<label><?php echo $_GET['msguname']?></label>
				</div>
				
				<div class="email">
					<p>Email:</p>
					<input type="text" name="email" id="email" value="<?php echo $_SESSION['email'];?>" placeholder="ie: mail@gmail.com" />
					<label><?php echo $_GET['msgemail']?></label>
				</div>

				<div class="pass">
					<p>Password:</p>
					<input type="password" name="password" id="password" value="<?php echo $_SESSION['password'];?>" placeholder="ie: 123456789@ or #12345678"/>
					<label><?php echo $_GET['msgpass']?></label>
				</div>
			
				<div class="gen">
					<p>Gender:</p>
					<input type="radio" value="Male" name="gender" id="gender"/>Male
					<input type="radio" value="Female" name="gender" id="gender"/>Female
					<input type="radio" value="Other" name="gender" id="gender"/>Other
					<label><?php echo $_GET['msggender']?></label>
				</div>
				
				<div class="mob">
					<p>Mobile:</p>
					<input type="text" name="mobileno" id="mobileno" value="<?php echo $_SESSION['mobileno'];?>"/>
					<label><?php echo $_GET['msgmob']?></label>
				</div>
			
				<div class="trm">
					<input type="checkbox" name="terms"/> I agree with the<a href=""> terms and conditions</a>
					<label><?php echo $_GET['msgterms']?></label>
				</div>
				
				<div class="btn">		
					<button type="submit" name="registration">Submit</button>
				</div>
			</form>
		</div>
		
		<script type="text/javascript">
			function Validate(){
				var file = document.getElementById('file').value;
				var name = document.getElementById('name').value;
				var username = document.getElementById('lastname').value;
				var email = document.getElementById('email').value;
				var password = document.getElementById('password').value;
				var gender = document.getElementById('gender').value;
				var mobileno = document.getElementById('mobileno').value;
			
				if(file.value == ""){
					document.getElementById('file').innerHTML =" *Required*";
					return false;
				}
				
				else if(name.value == ""){
					document.getElementById('name').innerHTML =" *Required*";
					return false;
				}
				
				else if(username.value == ""){
					document.getElementById('username').innerHTML =" *Required*";
					return false;
				}
				
				else if(email.value == ""){
					document.getElementById('email').innerHTML =" *Required*";
					return false;
				}
				
				else if(password.value == ""){
					document.getElementById('password').innerHTML =" *Required*";
					return false;
				}
				
				else if(gender.value == ""){
					document.getElementById('gender').innerHTML =" *Required*";
					return false;
				}
				
				else(mobileno.value == ""){
					document.getElementById('mobileno').innerHTML =" *Required*";
					return false;
				}
				return true;
			}	
		</script> 
	</body>
</html>