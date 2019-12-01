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
		<title>Ban User</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #002630;
			}
			.ban{
				margin: -670px 0px 0px 25%;
				padding: 20px;
			}
			.heading h1{
				color: #FF7D00;
			}
			.sea{
				position: absolute;
				left: 50%;
			}
			.search{
				position: relative;
				width: 100%;
			}
			.search input{
				float: left; 
				border: 3px solid #FF7D00;
				height: 40px;
				width: 350px;
				border-radius: 50px;
				padding: 0px 20px;
				font-size: 17px;
				outline: none;
			}
			.search button{
				position: absolute;
				height: 40px;
				width: 40px;
				border-radius: 50px;
				border: 4px solid #FF7D00;
				background-color: #FF7D00;
				cursor: pointer;
				right: 3px;
				transition: 1s;
			}
			.search img{
				height: 24px;
				width: 24px;
			}
			.search button:hover{
				transform: scale(1.2);
			}
			.wrap{
				margin: 60px 0px 0px 30px;
			}
			.wrap::after{
				content: "";
				display: table;
				clear: both;
			}
			.banuser p{
				float: left;
				font-size: 25px;
				margin: 20px;
			}
			.banbtn{
				margin: 15px 0px 0px 0px;
			}
			.banbtn button{
				width: 80px;
				height: 30px;
				border-radius: 50px;
				color: white;
				font-size: 17px;
				background-color: #FF7D00;
				border: 1px solid #FF7D00;
				margin: 20px 0px 0px 0px;
			}
			.banbtn button:hover{
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
		
		<div class="ban">
			<div class="heading">
				<h1>Ban User</h1>
			<div>
			
			<hr>
			
			<div class="sea">
				<div class="search">
					<input type="text" name="area" placeholder="Search User"/>
					<button name="search" type="submit"><img src="../app/image/search.png"></button>
				</div>
			</div>
			
			<div class="wrap">
				<div class="banuser">
					<p>Name: </p>
					<p>Username: </p>
					<p>Email: </p>
					<div class="banbtn">
						<button type="button" onclick="">Ban</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>