<?php

session_start();
$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['image'];
$uname=$_SESSION['user']['username'];
$mobile=$_SESSION['user']['mobile'];
$gender=$_SESSION['user']['gender'];

?>
<html>
	<head>
		<title>Profile</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #002630;
			}
			.profiles{
				margin: -670px 0px 0px 25%;
				padding: 20px;
			}
			.heading h1{
				color: #FF7D00;
			}
			.details{
				padding: 20px 0px 0px 30px;
			}
			.details img{
				height: 100px;
				width: 100px;
				border: 1px dashed;
			}
			.details p{
				font-weight: bold;
				color: white;
				font-size: 20px;
				line-height: 30px;
			}
			.edit{
				margin: 50px 0px 0px 350px;
				width: 200px;
				height: 50px;
				background-color: black;
				border-radius: 50px;
				line-height: 50px;
				text-align: center;
			}
			.edit a{
				font-size: 20px;
				font-weight: bold;
				text-decoration: none;
				color: white;
			}
			.edit:hover{
				cursor: pointer;
				background-color: #FF7D00;
				border-radius: 50px;
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
			
			<div class="profiles">
				<div class="heading">
					<h1>Profile</h1>
				<div>
				
				<hr>
				
				<div class="details">
					<img src="../app/uploads/<?php echo $imgname;?>">
					<p>Name: <?=$name;?></p>
					<p>Username: <?=$uname;?></p>
					<p>Email: <?=$email;?></p>
					<p>Gender: <?=$gender;?></p>
					<p>Mobile No: <?=$mobile;?></p>
				<div>
				
				<div class="edit">
					<a href="admin_edit_profile.php">Edit Profile</a>
				<div>
					
			</div>
	</body>
</html>