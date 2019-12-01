<?php

  
session_start();
include '../data/user_data_access.php';



function validate_signin_from_db($email,$pass)
{
	$types="";
	if($email=="")
	{
		
        echo "<script>document.location='signin.php?msge=*plese give email';</script>";
	}
	elseif($pass=="")
	{
	
        echo "<script>document.location='signin.php?msgp=*please give password';</script>";
	}
    
    
	else
	{
		$signin_Query = signin_Query($email,$pass);
		$rows=mysqli_num_rows($signin_Query);
		if($rows==1)
		{
			while($row=mysqli_fetch_assoc($signin_Query))  
			{
				$types=$row['user_type'];
				$_SESSION['type']=$types;
                $status=$row['status'];
                $_SESSION['status']=$status;
				$user=array(
				   'name'=>$row['name'],
                   'username'=>$row['username'],
				   'email'=>$row['email'],
				   'password'=>$row['password'],
                   'gender'=>$row['gender'],
				   'mobile'=>$row['mobile'],
				   'image'=>$row['image'],
				   'user_type'=>$row['user_type'],
                   'status'  =>$row['status']
                );
                
                $_SESSION['user']=$user;
			}
			
			
                    
			
			if($types=="user" && $status==1)
			{
				echo "<script>document.location='home.php';</script>";
			}
			elseif($types=="admin" && $status==1)
			{
				echo "<script>document.location='admin_profile.php';</script>";
			}
			// header('location: userhomepage.php?email='.$_SESSION['user']['email']);
        }
        
        else
		{
			echo "<script>document.location='signin.php?msgerr=*invalid password or email';</script>";
		}
        
   }
		
	
}






   
            
    function nameVerify($na)
       {
        $name = $na;
        $valid=0;


        if($name=="")
        {
            
            return "*Please give name";
        }

        else{

            if(ord($name[0]) <= 57){
                
                return "*Name Must start with letter";
            }
            elseif(str_word_count($name) <2){
                
                return  "*Name contains at least two words";
            }
            else{
                for ($i=0; $i <strlen($name) ; $i++){
                if (ord($name[$i]) == 95 || ord($name[$i]) == 32 || 
                ord($name[$i]) == 46 || (ord($name[$i])>=65 && ord($name[$i])<=90) || (ord($name[$i])>=97 && ord($name[$i])<=122)){
                        $valid=1;   
                    }
                else
                    $valid=0;
                }
            }

            if($valid==1)
            {
                
            return "";

            }
            else
               {
                 return  "*Invalid name";
                }

    }

       }
            
function passVerify($pa)
   {
   		$validPass=0;
   		$password=trim($pa);

					if(strlen($password)<8) 
					{
					
                    return "*Psssword length at least 8 characters";
                    $validPass=0;
                    }
                    	else 
                    	{
                     		for ($i=0; $i <strlen($password) ; $i++)
                     		{
                       			 if (ord($password[$i]) == 64 || ord($password[$i]) == 35 || 
                       					 ord($password[$i]) == 36 || ord($password[$i]) == 37)
                        			{
			                             $validPass=1;
			                            // global $passerr;
										 //$passerr="Valid Password";
			  
			                             break;
                            
                        			}
						
		                        else
		                            $validPass=0;
                       		}

                            if($validPass==0)
                              {
                        	 
                              return "*must contain one of the special Characters(@, #, $, %)";
                              }

                          if($validPass==1)
						  {
							return "";

						   }
						
                       }                       

     }

    
 
            

   function emailVerify($em)  
     {
      	$email=trim($em);
			if($email=="")
			{
				
				return  "*Please give email adress";
			}
       
            else if(!validate_unique_email($email))
                {
                    return "*Email already registered";
                }
       
			else if(strpos($email, '@') !== false)
			{ 
		        if(strpos($email, '.') !== false)
                {

				return "";
				
				}

			else{
				
				return  "*Invalid Formet";
			}
			}
			else {
			
			return "*Invalid Formet";
			}

      }
            
     function genderVerify($gn)
       {

       	$Gender=$gn;
			if($Gender=="")
			  {
				
				return  "*You must select one";
			  }
			 else
			    {
				 return "";
				 
		        }

       }
            

   function usernameVerify($un)
   {
   	 $validUsername=0;
   	 $username=trim($un);
       
    if($username=="")
			{
				
				return  "*Please give username";
			}

   	 if(strlen($username) <2){

   	 				
   	 				return  "*Name contains at least two characters";
                }
                else
                {
                    for ($i=0; $i <strlen($username) ; $i++)
                   {
	                    if (ord($username[$i]) == 95 || ord($username[$i]) == 32 || 
	                    ord($username[$i]) == 46 || (ord($username[$i])>=65 && ord($username[$i])<=90) || (ord($username[$i])>=97 && ord($username[$i])<=122) || (ord($username[$i])>=48 && ord($username[$i])<=57))
                         {
	                    	
	   	 				  //  $usererr= "*Valid user name";

	                        $validUsername=1;
                        						
                         }
                      else 
                        {
                        $validUsername=0;
                        }
                      if($validUsername==0)
                        {
                      	
   	 				    return "*Invalid username";
                        }
					  
                    }

                    if($validUsername==1)
					   {

						return "";
						
					   }
                }

   }
            

     function imageVerification($fileExt,$fileActualExt,$filesize)
     {    

         
	    //$fileExt = explode('.',$filename);
	    //$fileActualExt = strtolower(end($fileExt));

	    $AllowedExt = array('jpeg', 'jpg', 'png');

	    if(!in_array($fileActualExt, $AllowedExt) )
	    {
	   	
         return "Invalid File extension or not upload ";
        } 
    	elseif($filesize>1000000)
    	   {
    	   	 
             return "Your File size is too Large";
            }	
    	
    	else
    	{
    	return "";
		  
    	}


	  }
            
            
 function mobileVerify($mo)
       {
       	    $mobileno=trim($mo);
       	    $validno=0;

			if($mobileno=="")
			    {
			     
			   	 return "*Plaese give mobile number ";
			    }
			  elseif (strlen($mobileno)==11 && ord($mobileno[0])>=48 && ord($mobileno[0])<=57)
			  {		
			  	  $validno=1;
			  }

			   else
			   	 {
			   		for ($i=0; $i <strlen($mobileno) ; $i++) 
			   		{ 
			   			if (ord($mobileno[$i])>=48 && ord($mobileno[$i])<=57 && strlen($mobileno)==11) 
			   			    {
			   				 $validno=1;
			   				
							}
			   			else
			   			{
			   				
			   				return "*Invalid Number";	
			   			}
						
			   			
			   		}
			   		
			   		if(validno==1)
						{
						     return "";
							 	
						}	   	 
			
			      }

        }



    function validate_unique_email($email)
    {
        $query=email_Query($email);
        $rows1=mysqli_num_rows($query);
        if($rows1>0)
        {
            return false;
        }
        else
            return true;
    }

function UemailVerify($em)  
     {
      	$email=trim($em);
			if($email=="")
			{
				
				return  "*Please give email adress";
			}
       
			else if(strpos($email, '@') !== false)
			{ 
		        if(strpos($email, '.') !== false)
                {

				return "";
				
				}

			else{
				
				return  "*Invalid Formet";
			}
			}
			else {
			
			return "*Invalid Formet";
			}

      }





  
        

            


?>