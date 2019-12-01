<?php
session_start();
include '../service/user_service.php';
include '../data/home_data_access.php';

$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];

$count=0;

    
?>

<html>
	<head>
		<title>Mirpur</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding; 0px;
				background-color: #00303d;
			}
			.area{
				margin: 80px 0px 0px 300px;
				overflow: hidden;
			}
			.img img{
				float: left;
				height: 400px;
				width: 400px;
			}
			.infor{
				margin: 70px 0px 0px 450px;;
			}
			.infor h1{
				color: #FF7D00;
			}
			.infor p{
				font-size: 28px;
				padding: 0px 0px 0px 30px;
			}
			.tit p{
				margin: 80px;
				font-size: 30px;
				text-align: center;
			}
			.home{
				height: 100%;		
				width: 100%;
				overflow: initial;
			}
			.house{
				height: 295px;		
				width: 300px;
				background-color: black;	
				margin: 20px 0px 0px 120px;
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
				font-size: 20x;
				padding: 9px 0px 0px 15px;
				font-weight: bold;
			}
			.house:hover{
				cursor: pointer;
				transform: scale(1.025);
			}
			.house_info p{
				font-size: 20x;
				margin: 15px 0px 0px 5px;
				font-weight: bold;
			}
			
		</style>	
	</head>
	
	<body>
        
		<?php
        
                                       //hearder inclusion speciic used
       if($email=="")
            {
               include 'header.php'; 
            }
             else if($_SESSION['type']=="user")
                 {
                include 'user_profile_header.php'; 
                 }
			
		?>

		<div class="area">
			<div class="img">
				<img src="../app/image/banani.png">
			</div>
			<div class="infor">
				<h1>Uttara</h1>
				<p><img src="../app/image/total.png">Total Available Homes: <?php echo $count;?></p>
				<p><img src="../app/image/rent.png">Homes for Rent: 1</p>
				<p><img src="../app/image/buy.png">Homes for Buy: 1</p>
			</div>	
		</div>

		<div class="tit">
           
			<p>Homes</p>
		</div>
		
        
        <?php 
                
				$area="uttra";		                           //dynamic data show 
				$query=home_area_query($area);
				$rows1=mysqli_num_rows($query);
                
                
                    if($rows1>0)
                        {
				            while($row=mysqli_fetch_assoc($query))  
				              {       
                                    global $count;
							         $count++;
                                   
						   
						?>
		<div class="home">
              
			<div class="house" onclick="location.href='aa.php?id=<?php echo $row['id'];?>';">
				<div class="house_image">
					<img src="../app/image/flat/mirpur1.png">
				</div>
				<div class="house_info">
					<div class="price">
						<img src="../app/image/taka.png">
						<p>: <?php echo $row['price'];?> Taka</p>
					</div>
					<p>Type: <?php echo $row['post_type'];?> &nbsp &nbsp &nbsp &nbsp Category: <?php echo $row['catagory'];?></p>
					<p>Flat# <?php echo $row['flat'];?>, House# <?php echo $row['house'];?>, Road# <?php echo $row['road'];?>, Section# <?php echo $row['sector'];?>, <?php echo $row['area'];?></p>
				</div>
                 
			</div>
            <?php }}?>
		</div>
		 
        
		<?php
			include 'footer.php';
		?>
		
	</body>	
</html>