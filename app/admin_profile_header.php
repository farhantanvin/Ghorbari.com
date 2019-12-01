<?php

session_start();
$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['image'];

?>
<html>
	<head>
		<title>Header</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding; 0px;
			}
			.header{
				background-color: #00303d;
				height: 100px;
			}
			.header::after {
				content: "";
				display: table;
				clear: both;
			}
			.menu{
				padding: 30px 0px 0px 0px;
			}
			.logo a{
				padding: 5px;
				float: left;
			}
			.menu ul{
				float: right;
				list-style: none;
				font-weight: bold;
			}
			.menu ul li{
				float: left;
				width: 185px;
				height: 40px;
				background-color: black;
				border-radius: 10px;
				line-height: 40px;
				text-align: center;
				font-size: 18px;
				margin-right: 5px;
				font-weight: bold;
			}
			.menu ul li a{
				text-decoration: none;
				color: white;
				display: block;
			}
			.menu ul li img{
				margin-right: 10px;
				vertical-align: middle;
				height: 26px;
				width: 26px;
				border-radius: 50%;
				border: 1px solid;
			}
			.menu ul li a:hover{
				background-color: #FF7D00;
				border-radius: 8px;
			}
			.menu ul li ul li{
				display: none;
			}
			.menu ul li:hover ul li{
				display: block;
			}
		</style>
	</head>
	
	<body>
		<div class="header">
			<div class="logo">
				<a href="home.php"><img src="../app/image/ghorbari.png"></a>
			</div>
			<div class="menu">
				<ul >
					<li><a href="home.php">Home</a></li>
					<li><a href="buy.php">Buy</a>
						<ul>
							<li><a href="buy_commercial.php">Commercial</a></li>
							<li><a href="buy_residential.php">Residential</a></li>
						</ul>
					</li>
					<li><a href="rent.php">Rent</a>
						<ul>
							<li><a href="rent_commercial.php">Commercial</a></li>
							<li><a href="rent_residential.php">Residential</a></li>
						</ul>
					</li>
					<li><a href="admin_profile.php"><?= $name; ?></a>						<!--who login his name and pic-->
						<ul>
							<li><a href="dashboard.php">Dashboard</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</body>	
</html>