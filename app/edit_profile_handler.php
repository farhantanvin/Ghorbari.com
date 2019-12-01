<?php
session_start();

require '../service/user_validation_service.php';










	if(isset($_POST['update']))
 {
       
        
      $emailErr=UemailVerify($_POST['email']);   
      $mobileErrr=mobileVerify($_POST['mobileno']);
      $nameErr=nameVerify($_POST['name']);
      $imageErr =imageVerification($_FILES['file'],$_FILES['file']['name'], $_FILES['file']['size']);
      $passErr=passVerify($_POST['password']);
      $unameErr=usernameVerify($_POST['uname']);      	
        
		if( $nameErr== "" && $unameErr == "" && $emailErr == "" && $passErr == ""  && $mobileErrr== "" )
		{
           
            update_Query($_POST['name'],$_POST['uname'],$_POST['email'],$_POST['password'],$_POST['mobileno'],$_FILES['file']);
                                                          //Refresh after upadate 
           
            $_SESSION['user']['email']=$_POST['email'];
            $_SESSION['user']['name']=$_POST['name'];
            $_SESSION['user']['imgname']=$_FILES['file'];
            $_SESSION['user']['username']=$_POST['uname'];
            $_SESSION['user']['mobile']=$_POST['mobileno'];
            

            
           
			echo "<script>document.location='user_profile.php';</script>";
			
			

		}
		else
		{
			echo "<script>document.location='edit_profile.php?msgname=$nameErr & msguname=$unameErr & msgemail=$emailErr & msgpass=$passErr &  msgmob=$mobileErrr  & msgimage=$imageErr ';</script>";
		}
		
}
?>