<?php
   include 'db_connection.php';


    




    function signin_Query($email,$pass)
    {
        return mysqli_query(connection(),"SELECT * FROM users WHERE email='$email' AND password='$pass'");
    }

    function signup_Query($name,$uname,$email,$password,$gender,$mobile,$image)
    {
        $status=1;
        $type="user";
      $query="INSERT INTO users(name,username,email,password,gender,mobile,image,user_type,status) VALUES('$name','$uname','$email','$password','$gender','$mobile','$image','$type','$status')";  
      
     mysqli_query(connection(),$query);
    }


function email_Query($email)
{
	return mysqli_query(connection(),"SELECT * FROM users WHERE email='$email'");
}


function update_Query($name,$uname,$email,$password,$mobile,$image)
{
	
	$sql="UPDATE users SET name='$name', username='$uname', email='$email', password='$password',mobile='$mobile',image='$image' WHERE email='$email'";
	mysqli_query(connection(),$sql);
}


function user_all_data($email)

{
    
    return mysqli_query(connection(),"SELECT * FROM users WHERE email='$email'");
    
}  

function user_delete($email)
    {
        $query="DELETE FROM users WHERE email ='$email'";
        mysqli_query(connection(),$query);
    
    }


function  req_data_query($email)
{
     return mysqli_query(connection(),"SELECT * FROM request WHERE post_email='$email'");
    
}


function total_user_admin()
{
    
    $query= "SELECT COUNT(id) AS total FROM users";
    $result= mysqli_query(connection(),$query);
    $values=mysqli_fetch_assoc($result);
    $num_rows=values['total'];
    return $num_rows;
    
}



?>