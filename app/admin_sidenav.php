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
			.sidenav{
				background-color: #00303d;
				width: 25%;
				height: 100%;
				position: sticky;
				top: 0px;
			}
			.image{
				padding: 30px 0px 10px 0px;
				text-align: center;
			}
			.image img{
				height: 90px;
				width: 90px;
				border: 1px solid;
				border-radius: 50%;
			}
			.image p{
				font-size: 25px;
			}
			.menus{
				margin: 0px 0px 0px -53px;
			}
			.menus ul{
				list-style: none;
			}
			.menus ul li{
				height: 50px;
				width: 350px;
				line-height: 50px;
				text-align: center;
				font-size: 23px;
				background-color: black;
				display: block;
				margin-bottom: 6px;
			}
			.menus ul li a{
				text-decoration: none;
				color: white;
				transition: 1s;
			}
			.menus ul li img{
				padding: 0px 10px 0px 0px;
			}
			.menus ul li a:hover{
				color: #FF7D00;
				transform: scale(1.5);
			}
		</style>
	</head>
	
	<body>
		<div class="sidenav">
			<div class="image">
				<img src="../app/uploads/<?php echo $imgname;?>">
				<p><?=$name;?></p>
			</div>
			<div class="menus">
				<ul>
					<li><img src="image/dashboard.png" style="height: 19px; width: 20px;"><a href="dashboard.php">Dashboard</a></li>
					<li><img src="image/username.png" style="height: 21px; width: 17px;"><a href="admin_profile.php">Profile</a></li>
					<li><img src="image/user_post.png" style="height: 20px; width: 15px;"><a href="admin_approved_post.php">Approved Post</a></li>
					<li><img src="image/remove_user.png" style="height: 20px; width: 20px;"><a href="admin_ban_user.php">Ban User</a></li>
					<li><img src="image/add_admin.png" style="height: 22px; width: 19px;"><a href="admin_add.php">Add Admin</a></li>
					<li><img src="image/delete_post.png" style="height: 20px; width: 18px;"><a href="admin_delete_post.php">Delete Post</a></li>
					<li><img src="image/notifications.png" style="height: 20px; width: 17px;"><a href="admin_notifications.php">Notifications</a></li>
				</ul>
			</div>
		</div>
	</body>	
</html>