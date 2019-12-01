<?php
include_once "../data/db_connection.php";
$search_value=$_GET['str'];
?>
<html>
	<head>
		<title>Search</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #00303d;
			}
			.searchtitile p{
				text-align: center;
				color: white;
				font-weight: bold;
				font-size: 30px;
				margin: 60px 40px 40px 40px;
			}
			.search_homes{
				margin: 50px;
			}
			.search_homes::after{
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
		
		
		<div class="searchtitile">
			<p>Search Results</p>
		</div>
		
		<div class="search_homes">
            <?php
			$query=mysqli_query(connection(),"SELECT * FROM homes WHERE area LIKE '".$_GET['str']."%'");
            $rows1=mysqli_num_rows($query);
            if($rows1>0)
            {
                while($row=mysqli_fetch_assoc($query))  
                {

        
		?>
				<div class="house" onclick="location.href=''">
					<div class="house_image">
                        <img src="image/<?php echo $row['image'];?>">

					</div>
					<div class="house_info">
						<div class="price">
							<img src="../app/image/taka.png">
							<p>: <?php echo $row['price'];?> Taka</p>
						</div>
						<p>Type: <?php echo $row['post_type'];?> &nbsp &nbsp &nbsp &nbsp Category: <?php echo $row['catagory'];?></p>
						<p>Flat#<?php echo $row['flat'];?>, House# <?php echo $row['house'];?>, Road# <?php echo $row['road'];?>, Section# <?php echo $row['sector'];?>, <?php echo $row['area'];?></p>
					</div>
				</div>
				
				
		</div>
        <?php }}
        else
        {
            echo "No result found";
        }
        ?>
		
	</body>	
</html>