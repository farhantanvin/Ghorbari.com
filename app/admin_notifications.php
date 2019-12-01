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
		<title>Notifications</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #002630;
			}
			.notification{
				margin: -670px 0px 0px 25%;
				padding: 20px;
			}
			.heading h1{
				color: #FF7D00;
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
		<div class="notification">
			<div class="heading">
				<h1>Notifications</h1>
			<div>
			
			<hr>
			
		</div>	
	</body>
</html>