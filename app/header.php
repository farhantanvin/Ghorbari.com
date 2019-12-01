<?php
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
				width: 100%;
			}
			.header::after{
				content: "";
				display: table;
				clear: both;
			}
			.logo a{
				padding: 10px;
				float: left;
			}
			.logo p{
				float: right;
				font-size: 20px;
				padding: 0px 20px 0px 0px;
			}
			.menu{
				padding: 30px 0px 0px 0px;
			}
			ul{
				float: right;
				list-style: none;
				font-weight: bold;
			}
			ul li{
				float: left;
				width: 185px;
				height: 40px;
				background-color: black;
				border-radius: 10px;
				line-height: 40px;
				text-align: center;
				font-size: 20px;
				margin-right: 5px;
				font-weight: bold;
			}
			ul li a{
				text-decoration: none;
				color: white;
				display: block;
			}
			ul li a:hover{
				background-color: #FF7D00;
				border-radius: 10px;
			}
			ul li ul li{
				display: none;
			}
			ul li:hover ul li{
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
				<ul>
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
					<li><a href="saved_homes1.php">Saved Homes</a></li>
					<li><a href="signin.php">Sign In</a></li>
				</ul>
			</div>
		</div>
	</body>	
</html>