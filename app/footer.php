<?php
?>
<html>
	<head>
		<title>Footer</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
			}
			.footer{
				background-color: #3F3F3F;
			}
			.footer::after{
				content: "";
				display: table;
				clear: both;
			}
			.about{
				margin: 0px;
				padding: 0px;
				height: 200px;
				width: 200px;
				float: left;
			}
			.about p{
				color: #FF7D00;
				font-weight: bold;
				font-size: 30px;
				padding: 0px 0px 0px 10px;
			}
			.about a{
				margin: 5px 0px 0px 0px;
				text-decoration: none;
				color: white;
				display: block;
				padding: 0px 0px 0px 30px;
				font-size: 20px;
				line-height: 30px;
				transition: 1s;
			}
			.about a:hover{
				color: #FF7D00;
				transform: scale(1.1);
			}
			.legal{
				margin: 0px 0px 0px 230px;
				padding: 0px;
				height: 200px;
				width: 300px;
				float: left;
			}
			.legal p{
				color: #FF7D00;
				font-weight: bold;
				font-size: 30px;
				padding: 0px 0px 0px 10px;
			}
			.legal a{
				margin: 5px 0px 0px 0px;
				text-decoration: none;
				color: white;
				display: block;
				padding: 0px 0px 0px 30px;
				font-size: 20px;
				line-height: 30px;
				transition: 1s;
			}
			.legal a:hover{
				color: #FF7D00;
				transform: scale(1.1);
			}
			.follow{
				margin: 0px 0px 0px 200px;
				padding: 0px;
				height: 200px;
				width: 400px;
				float: left;
			}
			.follow p{
				color: #FF7D00;
				font-weight: bold;
				font-size: 30px;
				padding: 0px 0px 0px 10px;
			}
			.follow a{
				display: inline-block;
				padding: 20px;
				transition: 1s;
			}
			.follow a:hover{
				transform: scale(1.3);
			}
		</style>
	</head>
	
	<body>
		<div class="footer">
			<div class="about">
				<p>About</p>
				<a href="about_ghorbari.php" target="_top">About GhorBari</a>
				<a href="contact_us.php" target="_top">Contact Us</a>
			</div>
			<div class="legal">
			<p>Legal</p>
				<a href="privacy_policy.php" target="_top">Privacy Policy</a>
				<a href="terms_conditions.php" target="_top">Terms & Conditions</a>
				<a href="help.php" target="_top">Help</a>	
			</div>
			<div class="follow">
				<p>Follow Us</p>
				<a href="http://www.facebook.com" target="_blank"><img src="image/facebook.png"></a>
				<a href="http://www.twitter.com" target="_blank"><img src="image/twitter.png"></a>
				<a href="http://www.instagram.com" target="_blank"><img src="image/instagram.png"></a>
				<a href="http://www.pinterest.com" target="_blank"><img src="image/pinterest.png"></a>
			</div>
		<div>
	</body>
<html>