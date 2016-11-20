<?php
session_name();
session_start();
include '/home/queuefom/public_html/headers/mobile.php';
include '/home/queuefom/public_html/controllers/base/head.php';

?>

<style>
body
{
    background-color: #2aa591;
}

</style>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<?php

if(isset($_POST['bid']))
{
$id = $_POST['id'];
$price = $_POST['price'];
$bid = $_POST['bid'];
$bidder = $_POST['bidder'];
}

include '_database/database.php';

$bid_send = mysql_query("INSERT INTO `Bids` (`id`, `user_id`, `ask`, `bid`, `feed`) VALUES (NULL, '$bidder', '$price', '$bid', '$id')");

echo "
<!DOCTYPE HTML>
<html>
<head style='width:100%; background-color: #2aa591'>

	          <center>
	          <img src='http://queueme.co.za/xxxx/pictures/logo.jpg'  style='width:50%; height:50%;'>
	      	  <h4 style='color:white;'>
	      	  Your offer of R".$bid." is in. If your bid is successful, Queueme shall prompt you to effect payment. 
	      	  </h4>
	      	  <form action='trade-account.php' method='POST'>
	              <input type='submit' name='submit' style='background-color: #ffdd88; border-color: #2aa591; color: #2aa591;' value='Return'/>
		  </form>
		  </center>
</head>
</html>";
?>