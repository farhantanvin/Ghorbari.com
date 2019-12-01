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
		<title>Side Navigation Bar</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding; 0px;
			}
			.sidenavig{
				background-color: #00303d;
				width: 25%;
				height: 100%;
				position: sticky;
				top: 0px;
			}
			.images{
				padding: 30px 0px 10px 0px;
				text-align: center;
			}
			.images img{
				height: 90px;
				width: 90px;
				border: 1px solid;
				border-radius: 50%;
			}
			.images p{
				font-weight: bold;
				font-size: 25px;
			}
			.navig{
				margin: 0px 0px 0px -53px;
			}
			.navig ul{
				list-style: none;
			}
			.navig ul li{
				height: 50px;
				width: 350px;
				line-height: 50px;
				text-align: center;
				font-size: 23px;
				background-color: black;
				display: block;
				margin-bottom: 6px;
				
			}
			.navig ul li a{
				text-decoration: none;
				color: white;
				transition: 1s;
			}
			.navig ul li img{
				padding: 0px 10px 0px 0px;
			}
			.navig ul li a:hover{
				color: #FF7D00;
				transform: scale(1.5);
			}
		</style>
	</head>
	
	<body>
		<div class="sidenavig">
			<div class="images">
				<img src="../app/uploads/<?php echo $imgname;?>">
				<p><?=$name;?></p>
			</div>
			<div class="navig">
				<ul>
					<li><img src="../app/image/username.png" style="height: 21px; width: 17px;"><a href="user_profile.php">Profile</a></li>
					<li><img src="../app/image/user_post.png" style="height: 20px; width: 15px;"><a href="buy_post.php">Buy/Rent Post</a></li>
					<li><img src="../app/image/history.png" style="height: 20px; width: 16px;"><a href="user_history.php">History</a></li>
					<li><img src="../app/image/saved_home.png" style="height: 19px; width: 19px;"><a href="saved_homes.php">Saved Homes</a></li>
					<li><img src="../app/image/delete_post.png" style="height: 20px; width: 18px;"><a href="delete_post.php">Delete Post</a></li>
					<li><img src="../app/image/notifications.png" style="height: 20px; width: 17px;"><a href="user_notifications.php">Notifications</a></li>
					<li><img src="../app/image/delete_account.png" style="height: 20px; width: 18px;"><a href="user_account_delete.php">Delete My Account</a></li>
				</ul>
			</div>
		</div>
	</body>	
</html>