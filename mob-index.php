<?php session_start();
if($_SESSION['user_username']!="")
{
 header("location:../my-profile.php");

}


 



else
{
 
 include '/home/queuefom/public_html/headers/mobile.php'; 
 include '/home/queuefom/public_html/mobile/detection.php';

 echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>";
 
 include '/home/queuefom/public_html/pages/mobile/homepage.php';
 
 
 
}
?>  
    
 
 
  