<?php
     
    include 'db_connection.php';  
    

    function home_Add_Query($post_email,$post_type,$catagory,$price,$size,$bed,$bath,$balcony,$flat,$house,$road,$sector,$area,$image)   //for posting rent/buy pst
        {

            $date = date('m/d/Y', time());
            $status=1;
            $count=0;

            $query="INSERT INTO homes(post_email,post_type,catagory,price, size,bed, bath, balcony,flat,house,road,sector,area,image,post_time,status,count) VALUES ('$post_email','$post_type','$catagory','$price','$size','$bed','$bath','$balcony','$flat','$house','$road','$sector','$area','$image','$date','$status','$count')";

           mysqli_query(connection(),$query);

        }
            //$date = date('m/d/Y h:i:s a', time());

            //echo "The time is " . $date;


    function home_index_query()
        {
            return mysqli_query(connection(),"SELECT * FROM homes LIMIT 6");

        }
function ohome_index_query()
        {
            return mysqli_query(connection(),"SELECT * FROM homes LIMIT 6  OFFSET 15");

        }

    function home_all_query()
        {
            return mysqli_query(connection(),"SELECT * FROM homes");
        }

    function home_id_query($id)
        {
            return mysqli_query(connection(),"SELECT * FROM homes WHERE id='$id'");
        }
    function home_area_query($area)
        {
            return mysqli_query(connection(),"SELECT * FROM homes WHERE area='$area'");
        }
    
   

    function home_req_query($post_name,$req_name,$req_email,$req_mobile,$post_id)
    {
        
        $status=1;
        $query="INSERT INTO request(post_email,req_name,req_email,req_phone,post_id,status) VALUES ('$post_name','$req_name','$req_email','$req_mobile','$post_id',$status)";
        mysqli_query(connection(),$query);   
            
    }

    function saved_home($post_id,$post_email,$whosaved_email)
    
    {
        $query="INSERT INTO saved(post_id,post_email,whosaved_email)VALUES('$post_id','$post_email','$whosaved_email')";
        mysqli_query(connection(),$query);
    }

    function saved_all_query($post_id)
    {
        return mysqli_query(connection(),"SELECT * FROM saved WHERE post_id='$post_id'");

    }
    
    function saved_all_e_query($post_id,$email)
    {
        
         return mysqli_query(connection(),"SELECT * FROM saved WHERE post_id= '$post_id' AND whosaved_email = '$email'");
    }
    
    function validate_saved($post_id,$email)
    {
        $query= saved_all_e_query($post_id,$email);
      
        $rows1=mysqli_num_rows($query);
        if($rows1>0)
        {
          return false;  
            
        }
        else
            return true;
    }

    function user_saved_All_post($pemail)
        {

            return mysqli_query(connection(),"SELECT * FROM homes WHERE id IN (SELECT post_id FROM saved WHERE whosaved_email ='$pemail')");   
        }

    function home_Buy_query($type)
        {
            return mysqli_query(connection(),"SELECT * FROM homes WHERE post_type='$type'");
        }

    function home_Type_cat_query($type,$catagory)
        {
            return mysqli_query(connection(),"SELECT * FROM homes WHERE post_type='$type' AND catagory = '$catagory'");
        }

    function search()
    {
        return mysqli_query(connection(),"SELECT * FROM homes WHERE area LIKE '".$_GET['str']."%'");
        
    }


    function search_home_email($email)
    
    {
        
         return mysqli_query(connection(),"SELECT * FROM homes WHERE post_email='$email'");
        
    }

    function delete_post_by_postID($pid)
    
    {
        $query="DELETE FROM homes WHERE id ='$pid'";
        mysqli_query(connection(),$query);
    }

    
    
    

    
     
?>