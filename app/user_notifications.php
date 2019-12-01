<?php

session_start();


include '../data/user_data_access.php';
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
		<title>User Notifications</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #002630;
			}
			.notification{
				margin: -670px 0px 0px 25%;
				padding: 20px;
			}
			.heading h1{
				color: #FF7D00;
			}
			.request{
				border: 3px solid #FF7D00;
				width: 400px;
				margin: 20px 0px 0px 20px;
			}
			.request p{
				font-size: 22x;
				font-weight: bold;
				padding: 0px 0px 0px 10px;
			}
			
			
		</style>	
	</head>

	<body>
		<?php
			if($email==""){
                include 'header.php'; 
                echo "<script>document.location='home.php';</script>";
            }
            else if($_SESSION['type']=="user"){
				include 'user_profile_header.php';
				include 'user_sidenav.php';
            }
		?>
		
		<div class="notification">
            <div class="heading">
				<h1>Notifications</h1>
                </div>
			
			
			<hr>
            
            
			
			
                
                <?php 
              
						                           //dynamic data show 
				$query=req_data_query($email);
				$rows1=mysqli_num_rows($query);
                
                
                    if($rows1>0)
                        {
				            while($row=mysqli_fetch_assoc($query))  
				              {
								
						   
						?>
           <div class="request">
				<p>Request For Viewing</p>
				<p>Name:<?php echo $row['req_name'];?> </p>
				<p>Email: <?php echo $row['req_email'];?></p>
				<p>Phone:<?php echo $row['req_phone'];?> </p>
			</div>
			
			<?php }}?> 
			
			
			
		</div>	
	</body>
</html>