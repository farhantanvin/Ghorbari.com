
<script type="text/javascript">          //javascript validation

        function validation()
    {
          var catagory = document.getElementById('catagory').value;
          var price = document.getElementById('price').value;
          var size = document.getElementById('size').value;
          var flat = document.getElementById('flat').value;
          var house = document.getElementById('house').value;
          var road = document.getElementById('road').value;
          var section = document.getElementById('section').value;
          var area = document.getElementById('area').value;
          var bed = document.getElementById('bed').value;
          var bath = document.getElementById('bath').value;
          var balcony = document.getElementById('balcony').value;


          if(catagory  == ""){
            document.getElementById('cataErr').innerHTML =" *Required";
            return false;
          }
        if(price === ""){
            document.getElementById('priceErr').innerHTML =" *Required";
            return false;
          }
        
        if(size === ""){
            document.getElementById('sizeErr').innerHTML =" *Required";
            return false;
          }
        
        if(flat === ""){
            document.getElementById('flatErr').innerHTML =" *Required";
            return false;
          }
        
        if(house === ""){
            document.getElementById('houseErr').innerHTML =" *Required";
            return false;
          }
        
        if(road === ""){
            document.getElementById('roadErr').innerHTML =" *Required";
            return false;
          }
        
        if(section === ""){
            document.getElementById('sectionErr').innerHTML =" *Required";
            return false;
          }
        
        if(area === ""){
            document.getElementById('areaErr').innerHTML =" *Required";
            return false;
          }
        
        if(bed === ""){
            document.getElementById('bedErr').innerHTML =" *Required";
            return false;
          }
        
        if(bath === ""){
            document.getElementById('bathErr').innerHTML =" *Required";
            return false;
          }
        if(balcony === ""){
            document.getElementById('balErr').innerHTML =" *Required";
            return false;
          }


          return true;

    }

  </script>





<?php

session_start();
include '../data/home_data_access.php';

$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['image'];
$uname=$_SESSION['user']['username'];
$mobile=$_SESSION['user']['mobile'];
$gender=$_SESSION['user']['gender'];







$image=$_FILES['file'];
$filenName=$_FILES['file']['name'];
$fileTmpName=$_FILES['file']['tmp_name'];
$fileSize=$_FILES['file']['size'];
$fileType=$_FILES['file']['type'];
$fileExt = explode('.',$filename);
$fileActualExt = strtolower(end($fileExt));
$catagory=$_POST['catagory'];
$price=$_POST['price'];
$size=$_POST['size'];
$flat=$_POST['flat'];
$house=$_POST['house'];
$road=$_POST['road'];
$section=$_POST['section'];
$area=$_POST['area'];
$bed=$_POST['bed'];
$bath=$_POST['bath'];
$balcony=$_POST['balcony'];




    //echo "<script>document.location='home.php';</script>";
 
    if(isset($_POST['buy']))
    
    
    {
       $image=$_FILES['file'];
        $filenName=$_FILES['file']['name'];
        $fileTmpName=$_FILES['file']['tmp_name'];
        $fileSize=$_FILES['file']['size'];
        $fileType=$_FILES['file']['type'];
        $fileExt = explode('.',$filename);
        $fileActualExt = strtolower(end($fileExt));  
        
        
      $fileNameNew= uniqid('',true).".".$fileActualExt;
      $fileDestination='../app/uploads/'.$filenName;
       move_uploaded_file($fileTmpName,$fileDestination);
      $buy="buy";
home_Add_Query($email,$buy,$catagory,$price,$size,$bed,$bath,$balcony,$flat,$house,$road,$section,$area,$filenName);   
    }    	
        
		


?>

<html>
	<head>
		<title>Post for Buy</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #002630;
			}
			.post{
				margin: -670px 0px 0px 25%;
				padding: 20px;
			}
			.btn1{
				margin: 30px 0px 0px 0px;
			}
			.btn1 button{
				width: 150px;
				height: 45px;
				border-radius: 50px;
				color: white;
				font-size: 20px;
				background-color: #FF7D00;
				border: 1px solid #FF7D00;
			}
			.btn1 button:hover{
				cursor: pointer;
			}
			.btn2{
				margin: -45px 0px 0px 160px;
			}
			.btn2 button{
				width: 150px;
				height: 45px;
				border-radius: 50px;
				color: white;
				font-size: 20px;
				background-color: black;
				border: 1px solid black;
			}
			.btn2 button:hover{
				cursor: pointer;
			}
			.postform{
				padding: 30px;
			}
			.pics p{
				font-size: 20px;
			}
			.pics img{
				width: 70px;
				height: 70px;
			}
			.cat{
				margin: 30px 50px 0px 0px;
			}
			.cat p{
				float: left; 
				font-size: 20px;
				margin: 0px 94px 0px 0px;
			}
			.cat select,option{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 350px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.cat select:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00;
			}
			.prices{
				margin: 30px 50px 0px 0px;
			}
			.prices p{
				float: left; 
				font-size: 20px;
				margin: 0px 130px 0px 0px;
			}
			.prices::after{
				content: "";
				display: table;
				clear: both;
			}
			.prices input{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 350px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.prices input:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00; 
			}
			.sizes{
				margin: 30px 60px 0px 0px;
			}
			.sizes p{
				float: left; 
				font-size: 20px;
				margin: 0px 139px 0px 0px;
			}
			.sizes::after{
				content: "";
				display: table;
				clear: both;
			}
			.sizes input{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 350px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.sizes input:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00; 
			}
			.add{
				margin: 30px 60px 0px 0px;
			}
			.add p{
				float: left; 
				font-size: 20px;
				margin: 0px 139px 0px 0px;
			}
			.add::after{
				content: "";
				display: table;
				clear: both;
			}
			.address2{
				float: left;
				margin: -36px 0px 0px 185px;
				line-height: 50px;
			}
			.address2::after{
				content: "";
				display: table;
				clear: both;
			}
			.address2 input{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 70px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.address2 input:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00; 
			}
			.address2 select,option{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 150px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.address2 select:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00;
			}
			.beds{
				margin: 30px 60px 0px 0px;
			}
			.beds p{
				float: left; 
				font-size: 20px;
				margin: 0px 145px 0px 0px;
			}
			.beds::after{
				content: "";
				display: table;
				clear: both;
			}
			.beds select,option{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 350px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.beds select:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00;
			}
			.baths{
				margin: 30px 60px 0px 0px;
			}
			.baths p{
				float: left; 
				font-size: 20px;
				margin: 0px 140px 0px 0px;
			}
			.baths::after{
				content: "";
				display: table;
				clear: both;
			}
			.baths select,option{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 350px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.baths select:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00;
			}
			.balconys{
				margin: 30px 60px 0px 0px;
			}
			.balconys p{
				float: left; 
				font-size: 20px;
				margin: 0px 110px 0px 0px;
			}
			.balconys::after{
				content: "";
				display: table;
				clear: both;
			}
			.balconys select,option{
				border: 2px solid #FF7D00;
				height: 30px;
				width: 350px;
				border-radius: 50px;
				padding: 0px 10px;
				font-size: 20px;
				outline: none;
			}
			.balconys select:focus{
				box-shadow: 0px 0px 2px 2px #FF7D00;
			}
			.btn{
				margin: 50px 0px 0px 0px;
				text-align: center;
			}
			.btn button{
				width: 120px;
				height: 40px;
				border-radius: 50px;
				color: white;
				font-size: 20px;
				background-color: #FF7D00;
				border: 1px solid #FF7D00;
			}
			.btn button:hover{
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
            else if($_SESSION['type']=="user"){
				include 'user_profile_header.php';
				include 'user_sidenav.php';
            }
		?>
		
		<div class="post">
			<div class="heading">
				<div class="btn1">
					<button type="button" onclick="location.href='buy_post.php';">Buy Post</button>
				</div>
				<div class="btn2">
					<button type="button" onclick="location.href='rent_post.php';">Rent Post</button>
				</div>
			</div>
			
			<hr>
			
			<div class="postform">
				<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="return validation()" enctype="multipart/form-data">
					<div class="pics">
						<p>Choose an image: </p>
						<img src="../app/image/user.png" alt="upload image">
						<input type="file" name="file" id="file"/>
                        <span id=fileErr class="text-danger font-weight-bold" style="color:blue"></span>
					</div>
					<div class="cat">
						<p>Category: </p>
						<select id="catagory" name="catagory">
							<option value="">Select area</option>
							<option value="Commercial">Commercial</option>
							<option value="Residential">Residential</option>	
						</select>
                        <span id="cataErr" class="text-danger font-weight-bold" style="color:blue"></span>
					</div>
					<div class="prices">
						<p>Price: </p>
						<input type="text" name="price" id="price" placeholder="Enter Price(e.g. 10000 Taka)"/>
                        <span id="priceErr" class="text-danger font-weight-bold" style="color:blue"></span> 
					</div>
					<div class="sizes">
						<p>Size: </p>
						<input type="text" name="size" id="size" placeholder="Enter Size(e.g. 1200 Squre Feet)"/>
                        <span id="sizeErr" class="text-danger font-weight-bold" style="color:blue"></span> 
					</div>
					<div class="add">
						<p>Address: <p>
						<div class="address2">
							<p>
								Flat# <input type="text" name="flat" id="flat"/> <span id="flatErr" class="text-danger font-weight-bold" style="color:blue"></span>, House# <input type="text" name="house" id="house"/> <span id="houseErr" class="text-danger font-weight-bold" style="color:blue"></span>, Road# <input type="text" name="road" id="road" /><span id="roadErr" class="text-danger font-weight-bold" style="color:blue"></span>, Sector/Section# <input type="text" name="section" id="section"/>,<span id="sectionErr" class="text-danger font-weight-bold" style="color:blue"></span>
								Area#
								<select name="area" id="area">
									<option value="">Select area</option>
									<option value="Banani">Banani</option>
									<option value="Bashundhara">Bashundhara</option>
									<option value="Dhanmondi">Dhanmondi</option>
									<option value="Gulshan">Gulshan</option>
									<option value="Mirpur">Mirpur</option>
									<option value="Uttara">Uttara</option>
								</select>
                                <span id="areaErr" class="text-danger font-weight-bold" style="color:blue"></span>
							</p>
						</div>
					</div>
					<div class="beds">
						<p>Bed:</p>
						<select name="bed" id="bed">
							<option value="">Select one</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
                        <span id="bedErr" class="text-danger font-weight-bold" style="color:blue"></span>
					</div>
					<div class="baths">
						<p>Bath:</p>
						<select name="bath" id="bath">
							<option value="">Select one</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
                        <span id="bathErr" class="text-danger font-weight-bold" style="color:blue"></span>
					</div>
					<div class="balconys">				
						<p>Balcony:</p>
						<select name="balcony" id="balcony">
							<option value="">Select one</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
                        <span id="balErr" class="text-danger font-weight-bold" style="color:blue"></span>
					</div>
					<div class="btn">					
						<button type="submit" name="buy">Submit</button>
					</div>
				</form>
			</div>
		</div>
        
        
        
        
	</body>
</html>