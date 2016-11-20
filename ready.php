<?php
session_name();
session_start();
include '/home/queuefom/public_html/headers/mobile.php';
include '/home/queuefom/public_html/_database/database.php';
include '/home/queuefom/public_html/controllers/base/head.php';

?>

<style>
body
{
    background-color: #2aa591;
}

span
{}

.main
{
}

}
</style>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<?php

if(isset($_POST['id']))
{
$id = $_POST['id'];
$status_query = mysql_query("UPDATE `PointOfSale` SET `status` = '1' WHERE `id` = '$id'");
}

$query = mysql_query("SELECT * FROM `PointOfSale` WHERE `id` = '$id'");
$info = mysql_fetch_assoc($query);
$user_id = $info['user'];

echo "
<!DOCTYPE HTML>
<html>
<head style='width:100%; background-color: #2aa591'>

	          <center>
	          <img src='http://queueme.co.za/xxxx/pictures/logo.jpg'  style='width:50%; height:50%;'>
	      	  <h4 style='color:white;'>
	      	  User ($user_id) has been notified and are on their way to collect their order from your store.
	      	  </h4>
	      	  <form action='index.php' method='POST'>
	              <input type='submit' name='submit' style='background-color: #ffdd88; border-color: #2aa591; color: #2aa591;' value='Return'/>
		  </form>
		  </center>
</head>
</html>";

?>