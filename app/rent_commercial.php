<?php

session_start();
include '../service/user_service.php';
include '../data/home_data_access.php';

$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];

?>
<html>
	<head>
		<title>Commercial</title>
		<style>
			body {
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #00303d;
			}
			.filtersearch{
				margin: 5% 0 0 30%;
			}
			.area{
				margin: 0px 0px 10px 0px;
			}
			.area input{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 412px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.area input:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00; 
			}
			.prices{
				margin: 0px 0px 10px 0px;
			}
			.prices input{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 200px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.prices input:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00; 
			}
			.sizes{
				margin: 0px 0px 10px 0px;
			}
			.sizes input{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 200px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.sizes input:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00; 
			}
			.beds{
				margin: 0px 0px 10px 0px;
			}
			.beds select,option{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 200px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.beds select:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00;
			}
			.balconys{
				margin: 0px 0px 10px 0px;
			}
			.balconys select,option{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 412px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.balconys select:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00;
			}
			.btn1{
				margin: 0px 0px 0px 125px;
			}
			.btn1 button{
				width: 150px;
				height: 45px;
				border-radius: 50px;
				color: white;
				font-size: 20px;
				font-weight: bold;
				background-color: #FF7D00;
				border: 1px solid #FF7D00;
			}
			.btn1 button:hover{
				cursor: pointer;
			}
			.rent p{
				text-align: center;
				color: white;
				font-weight: bold;
				font-size: 30px;
				margin: 60px 40px 40px 40px;
			}
			.com{
				margin: 50px;
			}
			.com::after{
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
				overflow: hidden;
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
                    
                    
                       if($email=="")
                        {
                           include 'header.php'; 
                        }
                        else if($_SESSION['type']=="user")
                        {
                           include 'user_profile_header.php'; 
                        }
                        else if($_SESSION['type']=="admin")
                        {
                           include 'admin_profile_header.php'; 
                        }
			 
                    ?>
		
		<div class="filtersearch">
			<div class="area">
				<input type="text" name="area" placeholder="Enter Area"/>
			</div>
		
			<div class="prices">
				<input type="text" name="minprice" placeholder="Enter Min Price"/> - 
				<input type="text" name="maxprice" placeholder="Enter Max Price"/>
			</div>
		
			<div class="sizes">
				<input type="text" name="minsize" placeholder="Enter Min Size"/> - 
				<input type="text" name="maxsize" placeholder="Enter Max Size"/>
			</div>
		
			<div class="beds">
				<select>
					<option>Select Bed</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
				&nbsp
				<select>
					<option>Select Bath</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
			
			<div class="balconys">
				<select>
					<option>Select Balcony</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
		
			<div class="btn1">
				<button type="button" onclick="location.href='';">Search</button>
			</div>
		</div>
	
		<div class="rent">
			<p>Rent Commercial Homes</p>
		</div>
		
		<div class="com">
			
			<?php 
                
				$type="rent";                 //dynamic data show
                $cata="commercial";
				$query=home_Type_cat_query($type,$catagory);
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
		
              
		<?php 
			include 'footer.php';
		?>
	</body>	
</html>