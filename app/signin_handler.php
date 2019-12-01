<?php
session_start();
require '../service/user_validation_service.php';



$email=$_POST['email'];
$pass=$_POST['password'];


if(isset($_POST['login']))
{

	
	
    if(!empty(isset($_POST['remember'])))        //remember me * using cookie here
        {
            setcookie("email",$_POST['email'],time()+(365*24*60*60));
            setcookie("pass",$_POST['password'],time()+(365*24*60*60));
        
        }
    
     validate_signin_from_db($email,$pass);
    
	
}


?>