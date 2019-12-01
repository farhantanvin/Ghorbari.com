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
		<title>Approve Post</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #002630;
			}
			.approve{
				margin: -670px 0px 0px 25%;
				padding: 20px;
			}
			.heading h1{
				color: #FF7D00;
			}
			.wrap{
				margin: 20px;
			}
			.wrap::after{
				content: "";
				display: table;
				clear: both;
			}
			.house{
				height: 330px;		
				width: 300px;
				background-color: black;	
				margin: 35px 30px 0px 65px;
				border-radius: 20px;
				border: 2px solid #FF7D00;
				transition: 1s;
				float: left;
			}
			.house_image img{
				height: 150px;
				width: 300px;
				border-radius: 20px;
			}
			.price img{
				float: left;
				height: 16px;
				width: 14px;
				margin: 10px 10px 15px 80px;
				text-align: center;
			}
			.price p{
				color: white;
				font-size: 20x;
				padding: 9px 0px 0px 15px;
				font-weight: bold;
			}
			.house:hover{
				
				transform: scale(1.025);
			}
			.house_info p{
				color: white;
				font-size: 20x;
				margin: 15px 0px 0px 5px;
				font-weight: bold;
			}
			
			.btn button{
				width: 80px;
				height: 30px;
				border-radius: 50px;
				color: white;
				font-size: 17px;
				background-color: #FF7D00;
				border: 1px solid #FF7D00;
                margin: 400px 0px 0px -200px;
                
			}
			.btn button:hover{
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
		
		<div class="approve">
			<div class="heading">
				<h1>Approve Post</h1>
            </div>
			
			<hr>
			
			<div class="wrap">
				<div class="house" onclick="location.href='';">
					<div class="house_image">
						<img src="../app/image/flat/mirpur1.png">
					</div>
					<div class="house_info">
						<div class="price">
							<img src="../app/image/taka.png">
							<p>: 21000 Taka</p>
						</div>
						<p>Type: Rent &nbsp &nbsp &nbsp &nbsp Category: Residential</p>
						<p>Flat# A/1, House# 9, Road# 5, Section# 6, Mirpur</p>
						
					</div>
				</div>
                <div class="btn">
                    <button type="button" onclick="">Decline</button>
				    <button type="button" onclick="">Approve</button>
				    
				</div>
			</div>
		</div>
	</body>
</html>