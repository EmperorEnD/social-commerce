<?php
session_name();
session_start();

if($_SESSION['user_username']=="")
{
 header("http://queueme.co.za/index.php");
}

else
{ 
	include '/home/queuefom/public_html/components/authentication.php' ;
	include '/home/queuefom/public_html/components/session-check.php' ;
	include '/home/queuefom/public_html/controllers/base/head.php' ;
	include '/home/queuefom/public_html/headers/mobile.php'; 
	include '/home/queuefom/public_html/mobile/detection.php';
}
	include '/home/queuefom/public_html/_database/database.php';
	include '/home/queuefom/public_html/pages/head-left.php';
	include '/home/queuefom/public_html/controllers/base/style.php';

	$current_user = $_SESSION['user_username'];
	$user_username = mysql_real_escape_string($_REQUEST['user_username']);
	$profile_username=$rws['user_id'];
    
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
                   <div class='panel-body' style='width:100%;'>";           
          
    $sql = "SELECT * FROM `user_profile` WHERE `user_id`='$user_username'";
    $result = mysql_query($sql); 
    $rws = mysql_fetch_array($result);
             
    include 'controllers/form/edit_user_profile_picture_form.php';
    echo "         </div>
               </div>
           </div>
        </div>
    </div> 
</center>
</html>";
?>