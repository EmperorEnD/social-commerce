<?php
session_name();
session_start();

if($_SESSION['user_username']=="")
{
 header("location:../index.php");
}

else
{ 
	include 'components/authentication.php' ;
	include 'components/session-check.php' ;
	include 'controllers/base/head.php' ;
	include '/home/queuefom/public_html/headers/mobile.php'; 
	include '/home/queuefom/public_html/mobile/detection.php';
}
?>
<!DOCTYPE html>
<?php
echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>";
	
	include '/home/queuefom/public_html/_database/database.php';
	include '/home/queuefom/public_html/pages/head-right.php';

	include 'controllers/base/style.php';  
	  
	$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	
echo "
<!DOCTYPE html>

<style>
.holder{width=100%;}
.item{float:left;}
.price{right:0px;}

</style>

<center>
<div class='profile' style='width:100%;'>
  <div class='row clearfix' style='width:100%;'>
    <div class='content' style='width:100%;'>
       
    <div class='container' style='width:100%;'>
       <div class='no-gutter row' style='width:100%;'> 
           <div class='col-md-12' style='width:100%;'>
               <div class='panel panel-default' id='sidebar' style='width:100%;'>
                   <div class='panel-body' style='width:100%;'>";        
                   
    $sql = "SELECT * FROM `vendor_profile` WHERE `vendor_email`='$user_username'";
    $result = mysql_query($sql);
    $rws = mysql_fetch_array($result);
    $vendor = $rws['vendor_businessname'];

    include 'controllers/form/edit_vendor_profile_picture_form.php';
        echo "         </div>
               </div>
           </div>
        </div>
    </div> 
</center>
</html>";
?>