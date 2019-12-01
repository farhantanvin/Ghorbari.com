<?php

session_start();
$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];
$uname=$_SESSION['user']['username'];
$mobile=$_SESSION['user']['mobile'];
$gender=$_SESSION['user']['gender'];

?>
<html>
	<head>
		<title>Edit Profile</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #002630;
			}
			.profile{
				margin: -670px 0px 0px 25%;
				padding: 20px;
			}
			.heading h1{
				color: #FF7D00;
			}
			.editprofile{
				padding: 30px;
			}
			.pics p{
				font-size: 20px;
			}
			.pics img{
				height: 70px;
				width: 70px;
			}
			.name{
				margin: 30px 50px 0px 0px;
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
				margin: 30px 50px 0px 0px;
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
				margin: 0px 0px 0px 280px;
			}
			.email{
				margin: 30px 50px 0px 0px;
			}
			.email p{
				float: left; 
				font-size: 20px;
				margin: 0px 133px 0px 0px;
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
				margin: 0px 0px 0px 280px;
			}
			.pass{
				margin: 30px 50px 0px 0px;
			}
			.pass p{
				float: left; 
				font-size: 20px;
				margin: 0px 50px 0px 0px;
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
				margin: 0px 0px 0px 280px;
			}
			.mob{
				margin: 30px 50px 0px 0px;
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
				margin: 0px 0px 0px 280px;
			}
			.button{
				margin: 50px 0px 0px 0px;
				text-align: center;
			}
			.button button{
				width: 120px;
				height: 40px;
				border-radius: 50px;
				color: white;
				font-size: 20px;
				background-color: #FF7D00;
				border: 1px solid #FF7D00;
			}
			.button button:hover{
				cursor: pointer;
			}
		</style>
	</head>

	<body>
		<?php
			if($email==""){
                include 'header.php'; 
                echo "<script>document.location='home.php';</script>";
            }
            else if($_SESSION['type']=="admin"){
				include 'admin_profile_header.php';
				include 'admin_sidenav.php';
            }
		?>
		
		<div class="profile">
			<div class="heading">
				<h1>Edit Profile</h1>
			</div>
			
			<hr>
			
			<div class="editprofile">
				<form action="admin_edit_profile_handler.php" method="POST" enctype="multipart/form-data">
					<div class="pics">
						<p>Choose an image: </p>
						<img src="../app/image/user.png" alt="upload image">
						<input type="file" name="file"/>
					</div>
					<div class="name">
						<p>Name:</p>
						<input type="text" name="name" value="<?php echo $name;?>"/>
						<label><?php echo $_GET['msgname']?></label>
					</div>
					<div class="uname">
						<p>Username:</p>
						<input type="text" name="uname" value="<?php echo $uname;?>"/>
						<label><?php echo $_GET['msguname']?></label>
					</div>
					<div class="email">
						<p>Email:</p>
						<input type="text" name="email" value="<?php echo $email;?>"/>
						<label><?php echo $_GET['msgemail']?></label>
					</div>
					<div class="pass">
						<p>New Password:</p>
						<input type="password" name="password" value="<?php echo $_SESSION['user']['password'];?>"/>
                        <label><?php echo $_GET['msgpass']?></label>
					</div>
					<div class="mob">
						<p>Mobile:</p>
						<input type="text" name="mobileno" value="<?php echo $mobile;?>"/>
						<label><?php echo $_GET['msgmob']?></label>
					</div>
					<div class="button">					
						<button type="submit" name="update">Update</button>
					</div>
				</form>
			</div>
		</div>	
	</body>
</html>