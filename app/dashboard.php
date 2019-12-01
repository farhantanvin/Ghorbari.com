<?php

session_start();
include '../data/user_data_access.php';

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
		<title>Dashboard</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #002630;
			}
			.dash{
				margin: -670px 0px 0px 25%;
				padding: 20px;
			}
			.heading h1{
				color: #FF7D00;
			}
			.request{
				border: 3px solid #FF7D00;
				width: 400px;
				margin: 20px 0px 0px 20px;
			}
			.request p{
				font-size: 22x;
				font-weight: bold;
				padding: 0px 0px 0px 10px;
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
		
		
		<div class="dash">
			<div class="heading">
				<h1>Dashboard</h1>
            </div>
			
			<hr>
			
			<div class="request">
                <?php
                $h=total_user_admin();
                
                ?>
                
				<p>Total Registered User: <?php echo $h;?> </p>
			</div>
			<div class="request">
				<p>Total Post: </p>
			</div>
			
		</div>
                
	</body>
</html>