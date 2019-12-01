<?php
session_start();

require '../service/user_validation_service.php';



$name=$_POST['name'];
$_SESSION['name'] = $name;
$uname=$_POST['uname'];
$_SESSION['uname'] = $uname;
$email=$_POST['email'];
$_SESSION['email'] = $email;
$pass=$_POST['password'];
$_SESSION['password'] = $pass;
$gender=$_POST['gender'];
$_SESSION['gender'] = $gender;
$mobile=$_POST['mobileno'];
$_SESSION['mobileno'] = $mobile;

$image=$_FILES['file'];
$filenName=$_FILES['file']['name'];
$fileTmpName=$_FILES['file']['tmp_name'];
$fileSize=$_FILES['file']['size'];
$fileType=$_FILES['file']['type'];
$fileExt = explode('.',$filename);
$fileActualExt = strtolower(end($fileExt));

//$_SESSION['file'] = $image;


$terms=$_POST['terms'];





	if(isset($_POST['registration']))
 {
       if(isset($_POST['terms']))
            	{
					$termsErr == "";
            	}
            	else
            	{
            		
            		$termsErr="Plaese Agree the terms & conditions ";
					
					
            	}
        
      $emailErr=emailVerify($_POST['email']);   
      $genderErr=genderVerify($_POST['gender']);
      $mobileErrr=mobileVerify($_POST['mobileno']);
      $nameErr=nameVerify($_POST['name']);
      $imageErr =imageVerification($fileExt,$fileActualExt,$fileSize);
      $passErr=passVerify($_POST['password']);
      $unameErr=usernameVerify($_POST['uname']);      	
        
		if( $nameErr== "" && $unameErr == "" && $emailErr == "" && $passErr == "" && $genderErr == "" && $mobileErrr== ""  && $termsErr == "")
            
		{
            
            
            $fileNameNew= uniqid('',true).".".$fileActualExt;
            $fileDestination='C:/xampp/htdocs/ghorbari/app/uploads/'.$filenName;
            move_uploaded_file($fileTmpName,$fileDestination);
            signup_Query($name,$uname,$email,$pass,$gender,$mobile,$filenName);
            
            
			echo "<script>document.location='signin.php';</script>";
			$_SESSION['name'] = "";
            $_SESSION['uname']="";
			$_SESSION['email'] = "";
			$_SESSION['password'] = "";
			$_SESSION['gender'] = "";
            $_SESSION['mobileno']="";
			$_SESSION['file']="";
			

		}
		else
		{
			echo "<script>document.location='registration.php?msgname=$nameErr & msguname=$unameErr & msgemail=$emailErr & msgpass=$passErr & msggender=$genderErr & msgmob=$mobileErrr  & msgimage=$imageErr & msgterms=$termsErr ';</script>";
		}
		
}
?>