<?php session_start();
if($_SESSION['user_username']!="")
{
 header("location:../login.php");
}

else
{

 include '/home/queuefom/public_html/headers/mobile.php'; 
 include '/home/queuefom/public_html/mobile/detection.php';

 if(isMobile())
 {
 echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>";
 
 include'/home/queuefom/public_html/interface.php';
 }
 
 else
 { 
 echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>";
 include '/home/queuefom/public_html/login.php';
 }
 
}
?>  
    
 
 
  