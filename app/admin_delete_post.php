<?php

session_start();

include '../service/user_service.php';
include '../data/home_data_access.php';


if($_GET['mg']==="ok")           //For request sent notification
 {
   echo "<script>alert('POST DELETED');</script>";
   
 }
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
		<title>Delete Post</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #002630;
			}
			.delete{
				margin: -670px 0px 0px 25%;
				padding: 20px;
			}
			.heading h1{
				color: #FF7D00;
			}
			.deletepost{
				margin: 20px;
			}
			.deletepost::after{
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
			.house_info p{
				color: white;
				font-size: 20x;
				margin: 15px 0px 0px 5px;
				font-weight: bold;
			}
			.deletebtn{
				
			}
			.deletebtn button{
				width: 80px;
				height: 30px;
				border-radius: 50px;
				color: white;
				font-size: 17px;
				background-color: #FF7D00;
				border: 1px solid #FF7D00;
                margin: 400px 0px 0px -200px;
                
			}
			.deletebtn button:hover{
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
		
		
		<div class="delete">
			<div class="heading">
				<h1>Delete Post</h1>
			</div>
			
			<hr>
			
			<div class="deletepost">
                
                  <?php 
                $id=$_SESSION['post_id'];
						                           //dynamic data show 
				$query=home_all_query();
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
                        <div class="deletebtn">
							<button type="button" onclick="location.href='user_delete_post_handler.php?id=<?php echo $row['id'];?>'">Delete</button>
						</div>
				<?php }}?>
			</div>
		</div>
	</body>
</html>