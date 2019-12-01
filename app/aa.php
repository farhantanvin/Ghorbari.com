
<script type="text/javascript">

        function validation(){

      var user = document.getElementById('name').value;
      var Phone = document.getElementById('phone').value;
      var emails = document.getElementById('email').value;
      
      if(user.length < 2) {
        document.getElementById('Errname').innerHTML ="*more length required ";
        return false; 
      }
      
      
      if(Phone == ""){
        document.getElementById('Errphone').innerHTML =" *Required";
        return false;
      }
      if(isNaN(mobileNumber)){
        document.getElementById('Errphone').innerHTML =" * only numeric allow";
        return false;
      }
      if(phone.length!=11){
        document.getElementById('Errphone').innerHTML =" ** Mobile Number must be 11 digits only";
        return false;
      }



      if(emails == ""){
        document.getElementById('Erremail').innerHTML =" *Required";
        return false;
      }
      if(emails.indexOf('@') <= 0 ){
        document.getElementById('Erremail').innerHTML =" ** @ Invalid Position";
        return false;
      }

      if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
        document.getElementById('Erremail').innerHTML =" ** . Invalid Position";
        return false;
      }
      return true;
      
    }

  </script>




<?php
session_start();
include '../service/user_service.php';
include '../data/home_data_access.php';
$_SESSION['post_id']=$_GET['id'];
$_SESSION['post_email']=$_GET['email'];

 if($_GET['conf']==="ok")           //For request sent notification
 {
   echo "<script>alert('REQUEST SENT TO OWNER');</script>";
   
 }

if($_GET['sav']==="not")                 //For request sent notification
 {
   echo "<script>alert('ALREADY SAVED');</script>";
   
 }
 
$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];



?>
<html>
	<head>
		<title>Details</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #00303d;
			}
			.info{
				
				height: 700px;
				margin: 80px;
			}
			
			.save img{
				width: 30px;
				height: 27px;
				margin: -245px 0px 0px 465px;
				transition: 1s;
			}
			.save img:hover{
				cursor: pointer;
				transform: scale(1.2);
			}
			.allinfo{
				width: 500px;
				margin: 20px 0px 0px 30px;
			}
			.allinfo img{
				margin: 0px 10px 0px 23px;
			}
			.allinfo p{
				font-size: 20x;
				padding: 5px 0px 0px 15px;
				font-weight: bold;
			}
			.request{
				border: 3px solid #FF7D00;
				border-radius: 50px;
				width: 500px;
				margin: -770px 0px 400px 750px;
				padding: 10px;
				position: sticky;
				top: 0;
			}
			.request p{
				font-size: 20x;
				font-weight: bold;
			}
			.request h2{
				text-align: center;
			}
			.request input{
				border: 2px solid #FF7D00;
				height: 25px;
				width: 200px;
				border-radius: 30px;
				padding: 0px 0px 0px 15px;
				font-size: 15px;
				outline: none;
			}
			.request button{
				width: 250px;
				height: 50px;
				border-radius: 50px;
				color: white;
				font-size: 20px;
				font-weight: bold;
				background-color: #FF7D00;
				border: 1px solid #FF7D00;
				margin: 0px 0px 0px 140px;
			}
			.request button:hover{
				cursor: pointer;
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
        
        
        
		
		
		<div class="info">
            
              <?php 
                $id=$_SESSION['post_id'];
						                           //dynamic data show 
				$query=home_id_query($id);
				$rows1=mysqli_num_rows($query);
                
                
                    if($rows1>0)
                        {
				            while($row=mysqli_fetch_assoc($query))  
				              {
								
						   
						?>
           
			<div class="photo">
                 
				<img src="image/flat/<?php echo $row['image'];?>" style="height: 250px; width: 500px; border: 1px solid #FF7D00">
				<div class="save" onclick="location.href='saved_handler.php?id=<?php echo $row['id'];?>&email=<?php echo $row['post_email'];?>';">
					<img src="../app/image/save.png">
				</div>
			</div>
			<h1>Details</h1>
			<div class="allinfo">
				<p><img src="../app/image/taka.png" style="height: 15px; width: 13px;">: <?php echo $row['price'];?> Taka</p>
				<p><img src="../app/image/type.png" style="height: 16px; width: 16px;">Type: <?php echo $row['post_type'];?> </p>
				<p><img src="../app/image/category.png" style="height: 16px; width: 14px;">Category: <?php echo $row['catagory'];?></p>
				<p><img src="../app/image/size.png" style="height: 16px; width: 16px;">Size: <?php echo $row['size'];?> Square Feet</p>
				<p><img src="../app/image/bed.png" style="height: 16px; width: 16px;">Bed: <?php echo $row['bed'];?></p>
				<p><img src="../app/image/bath.png" style="height: 15px; width: 17px;">Bath: <?php echo $row['bath'];?></p>
				<p><img src="../app/image/belcony.png" style="height: 16px; width: 16px;">Balcony: <?php echo $row['balcony'];?></p>
				<p><img src="../app/image/address.png" style="height: 17px; width: 13px;">Address: Flat#<?php echo $row['flat'];?>, House# <?php echo $row['house'];?>, Road# <?php echo $row['road'];?>, Block# <?php echo $row['sector'];?>, <?php echo $row['area'];?></p>
                <p><img src="../app/image/phone.png" style="height: 15px; width: 15px;"> Phone: </p>
                
                
                
			</div>	
           
          <?php }}?>  
		</div>

		<div class="request">
				<h2>Contact With Owner</h2>
            <form action="req_handler.php" onsubmit="return validation()"  method="POST">
				<p>Hi,</p>
				<p>My name is: <input type="text" name="name" id="name" placeholder="Enter Your Name"/></p>
                <span id="Errname" class="text-danger font-weight-bold" style="color:blue"> </span>
				<p>and I am interested to rent your home. Please, give me a schedule for visiting your home and get more informaton of your home.</p>
				<p>You can contact with my mail: <input type="text" name="email" id="email" placeholder="Enter Your Email"/></p>
                <span id="Erremail" class="text-danger font-weight-bold" style="color:blue"> </span>
				<p>or phone: <input type="text" name="phone" id="phone" placeholder="Enter Your Phone"/></p>
                <span id="Errphone" class="text-danger font-weight-bold" style="color:blue"> </span>
				<button type="submit" name="submit">Request fot Visiting</button>
           </form>
			</div>



		<?php
			include 'footer.php';
		?>	
	</body>	
</html>