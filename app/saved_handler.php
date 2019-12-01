
<?php

session_start();
include '../service/user_service.php';
include '../data/home_data_access.php';

$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['imgname'];


   
    
   
    if($email=="")
   
       {
          echo "<script>document.location='saved_homes1.php';</script>";
       }

   
    else if(!validate_saved($_GET['id'],$id))
    {
      // echo "<script>alert('ALREADY SAVED');</script>"; 
        $pid=$_GET['id'];
       echo "<script>document.location='aa.php?id=$pid&sav=not';</script>"; 
    }
    else
    {
        saved_home($_GET['id'],$_GET['email'],$email);
        echo "<script>document.location='saved_homes.php';</script>";
        
    }




?>