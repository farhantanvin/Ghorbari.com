
<?php

session_start();
include '../service/user_service.php';
include '../data/home_data_access.php';

$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];

if(isset($_POST['submit']))
{
   
    
   
   $p_mail=$post_email;
  
   home_req_query($_SESSION['post_email'],$_POST['name'],$_POST['email'],$_POST['phone'],$_SESSION['post_id']);
    
    
    $pid=$_SESSION['post_id'];
    
    
   // echo "<script>document.alert("Hello! I am an alert box!!");</script>";
    echo "<script>document.location='aa.php?id=$pid&conf=ok';</script>";
		}


?>