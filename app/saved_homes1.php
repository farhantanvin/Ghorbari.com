<?php
?>
<html>
	<head>
		<title>Saved Homes</title>
		<style>
			body {
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #00303d;
			}
			.saved_homes{
				height: 295px;
			}
			.saved_homes p{
				text-align: center;
				color: white;
				font-weight: bold;
				font-size: 30px;
				margin: 60px 40px 40px 40px;
			}
		</style>
	</head>
	
	<body>
		<?php 
			include 'header.php';
		?>
		
		<div class="saved_homes">
			<p>Saved Homes</p>
			<p>You have to <a href="signin.php">signin</a> first</p>
		</div>
		
		<?php 
			include 'footer.php';
		?>
	</body>	
</html>