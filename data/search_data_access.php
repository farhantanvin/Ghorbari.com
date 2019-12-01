<?php
include 'connection.php';


    function all_catagory($catagory,$price,$size,$bed,$bath,$balcony)
    
    {
        $query="SELECT * FROM homes WHERE catagory='residential' OR price='1000' OR size='1000' OR bed='3' OR bath='3' OR balcony ='3'"
        
    }




?>