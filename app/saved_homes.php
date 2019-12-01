<?php

session_start();
include '../service/user_service.php';
include '../data/home_data_access.php';

$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];

echo ['user']['email'];


?>
<html>
	<head>
		<title>Saved Homes</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #002630;
			}
			.home{
				margin: -670px 0px 0px 25%;
				padding: 20px;
			}
			.heading h1{
				color: #FF7D00;
			}
			.saved{
				margin: 20px;
			}
			.saved::after{
				content: "";
				display: table;
				clear: both;
			}
			.house{
				height: 295px;		
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
				cursor: pointer;
				transform: scale(1.025);
			}
			.house_info p{
				color: white;
				font-size: 20x;
				margin: 15px 0px 0px 5px;
				font-weight: bold;
			}
		</style>
	</head>

	<body>
		<?php
			if($email==""){
                include 'header.php'; 
                echo "<script>document.location='saved_homes1.php';</script>";
            }
            else if($_SESSION['type']=="user"){
				include 'user_profile_header.php';
				include 'user_sidenav.php';
            }
		?>
		
		<div class="home">
			<div class="heading">
				<h1>Saved Homes</h1>
            </div>
			
			<hr>
			
			
			
			
			<div class="saved">
			
			
				<?php 
                
				                           //dynamic data show 
				$query=user_saved_All_post($email);
				$rows1=mysqli_num_rows($query);
                
                
                    if($rows1>0)
                        {
				            while($row=mysqli_fetch_assoc($query))  
				              {
								
						   
						?>

				<div class="house" onclick="location.href='aa.php?id=<?php echo $row['id'];?>&email=<?php echo $row['post_email'];?>'">          
					<div class="house_image">
						<img src="image/flat/<?php echo $row['image'];?>" >
					</div>
					<div class="house_info">
						<div class="price">
							<img src="../app/image/taka.png">
							<p>: <?php echo $row['price'];?></p>
						</div>
						<p>Type: Rent &nbsp &nbsp &nbsp &nbsp Category: Residential</p>
						<p>Flat# <?php echo $row['flat'];?>, House# <?php echo $row['house'];?>, Road# <?php echo $row['house'];?>, Section# <?php echo $row['sector'];?>, <?php echo $row['area'];?></p>
					</div>
				</div>
				
				<?php }}?>
			</div>
			
		</div>
	</body>
</html>					