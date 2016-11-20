<?php
session_name();
session_start();

if($_SESSION['user_username']=="")
{
 header("location:../index.php");
}

else
{ 
	include 'components/authentication.php';
	include 'components/session-check.php';
	include 'controllers/base/head.php';
	include '/home/queuefom/public_html/headers/mobile.php'; 
	include '/home/queuefom/public_html/mobile/detection.php';
}
?>
<!DOCTYPE html>
<?php
echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>";

	include '/home/queuefom/public_html/_database/database.php';
	include '/home/queuefom/public_html/pages/head-left.php';

	include 'controllers/base/style.php';

	$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	
	echo "
<style>
.holder{width=100%;}
.item{float:left;}
.price{right:0px;}
</style>";
?>
  <center>
    <div class="container" style="width:100%;">
<?php          
    $sql = "SELECT * FROM `user_profile` WHERE `user_email`='$user_username'";
    $result = mysql_query($sql);
    $rws = mysql_fetch_array($result);
    $user = $rws['user_id'];

    include "controllers/form/user-account-form.php";
?>
    </div>
  </center>
</html>