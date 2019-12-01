

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
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="homestyle.css">          <!--Header add-->
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

		
		<div class="image_slider">
			<div class="wrap" >
                
				<div class="search" >
					<input type="text" name="area" onkeyup="searchByAjax(this.value)"  id="search" placeholder="Search area"/>
					<button onclick ="getData()"><img src="../app/image/search.png"></button>
                  
				</div>
			</div>
            
		</div>
		<div id="demo"></div>
        
		<div class="area_name">
			<p>Area</p>
		</div>
		
		<div class="area_container">
			<div class="carousel">
				<div class="slider">
					<section>
						<div class="area" onclick="location.href='banani.php';">
							<div class="area_image">	
								<img src="../app/image/banani.png"/>
							</div>
							<div class="area_info">
								<h3>Banani</h3>
								<p>Total Available Homes: 2</p>
							</div>
						</div>

						<div class="area" onclick="location.href='bashundhara.php';">
							<div class="area_image">	
								<img src="../app/image/bashundhara.png"/>
							</div>
							<div class="area_info">
								<h3>Bashundhara</h3>
								<p>Total Available Homes: 2</p>
							</div>
						</div>

						<div class="area" onclick="location.href='dhanmondi.php';">
							<div class="area_image">	
								<img src="../app/image/dhanmondi.png"/>
							</div>
							<div class="area_info">
								<h3>Dhanmondi</h3>
								<p>Total Available Homes: 2</p>
							</div>
						</div>
					</section>

					<section>
						<div class="area" onclick="location.href='gulshan.php';">
							<div class="area_image">	
								<img src="../app/image/gulshan.png"/>
							</div>
							<div class="area_info">
								<h3>Gulshan</h3>
								<p>Total Available Homes: 3</p>
							</div>
						</div>
						
						<div class="area" onclick="location.href='mirpur.php';">
							<div class="area_image">	
								<img src="../app/image/mirpur.png"/>
							</div>
							<div class="area_info">
								<h3>Mirpur</h3>
								<p>Total Available Homes: 2</p>
							</div>
						</div>

						<div class="area" onclick="location.href='uttara.php';">
							<div class="area_image">	
								<img src="../app/image/uttara.png"/>
							</div>
							<div class="area_info">
								<h3>Uttara</h3>
								<p>Total Available Homes: 3</p>
							</div>
						</div> 
					</section>
				</div>
				<div class="control">
					<span class="arrow left">
						<i class="material-icons"></i>
					</span>
					<span class="arrow right">
						<i class="material-icons">></i>
					</span>
					<ul>
						<li class="selected"></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>
		</div>
        
		<div class="top_visited">
			<p>Top Visited Homes</p>
            
            
		</div>
		    
                                        	  
                
            
		<div class="home_container">
			<input type="radio" id="i1" name="images" checked />
			<input type="radio" id="i2" name="images" />
			
			<div class="home_slider" id="one">
                
            
                 <?php 
                
						                           //dynamic data show 
				$query=home_index_query();
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
                
				
               
				

				<label class="prev" for="i2"><span>&#x2039;</span></label>
				<label class="next" for="i2"><span>&#x203a;</span></label>	
                <?php }}?>
			</div>
				
			<div class="home_slider" id="two">
                
				<?php 
                
						                           //dynamic data show 
				$query=ohome_index_query();
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
                
				
                
                
				
				
				<label class="prev" for="i1"><span>&#x2039;</span></label>
				<label class="next" for="i1"><span>&#x203a;</span></label>
                <?php }}?>
			</div>
		</div>

		<?php
			include 'footer.php';
		?>
        
        
        
        <script>                          
             //javascript file
			const left = document.querySelector('.left');
			const right = document.querySelector('.right');
			const slider = document.querySelector('.slider');
			const indicatorParent = document.querySelector('.control ul'); 
			const indicators = document.querySelectorAll('.control li');
			index = 0;

			indicators.forEach((indicator, i) => {
				indicator.addEventListener('click', () => {
				document.querySelector('.control .selected').classList.remove('selected');
				indicator.classList.add('selected');
				slider.style.transform = 'translateX(' + (i) * -33 + '%)';  
				index = i;
			  });
			});

			left.addEventListener('click', function() {
				index = (index > 0) ? index -1 : 0;
				document.querySelector('.control .selected').classList.remove('selected');
				indicatorParent.children[index].classList.add('selected');
				slider.style.transform = 'translateX(' + (index) * -33 + '%)';
			});

			right.addEventListener('click', function() {
				index = (index < 4 - 1) ? index+1 : 3;
				document.querySelector('.control .selected').classList.remove('selected');
				indicatorParent.children[index].classList.add('selected');
				slider.style.transform = 'translateX(' + (index) * -33 + '%)';
			});
            
function searchByAjax(str)
	{
		let divid=document.getElementById("demo");
		let xhttp=new XMLHttpRequest();
		if(str=="")
			{
				
				divid.style.display = "none";
			}
		else
		{
			xhttp.onreadystatechange=function()
			{
				
			if(this.readyState==4 && this.status==200)
				{
					// console.log("200: ",this.responseText);
//					alert(this.responseText);
					divid.style.display = "block";
					divid.innerHTML=this.responseText;
				}
			};
			xhttp.open("GET","search.php?str="+str,true);
			xhttp.send();
		}
	}
    
            
		</script>
		
	</body>	
</html>
    