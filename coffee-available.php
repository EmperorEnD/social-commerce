<?php session_start();
echo "<link href='assets/css/base/header.css' type='text/css' rel='stylesheet'>";
if($_SESSION['user_username']=="")
{
      include '/home/queuefom/public_html/headers/mobile.php'; 
      include '/home/queuefom/public_html/mobile/detection.php';
      if(isMobile()){
      echo "<link href='pages/mobile/css/header.css' type='text/css' rel='stylesheet'>";
      echo "<link href='assets/css/base/header.css' type='text/css' rel='stylesheet'>";
      include '/home/queuefom/public_html/pages/mobile/header.php';

      }
      else{
      include '/home/queuefom/public_html/controllers/navigation/header-std.php';}

echo "<form action='confirm_page.php' method= 'post'>";

 include 'components/available-coffee.php' ;
echo "<div class='sbumit'><button type='submit'>send</button></div>";
echo "</form>";
}


else{ ?>

<?php include 'components/authentication.php' ;
      include 'components/session-check.php' ;
      include 'controllers/base/head.php' ;
      include '/home/queuefom/public_html/headers/mobile.php'; 
      include '/home/queuefom/public_html/mobile/detection.php';

if(isMobile()){
      echo "<link href='pages/mobile/css/header.css' type='text/css' rel='stylesheet'>";
      echo "<link href='assets/css/base/header.css' type='text/css' rel='stylesheet'>";
      include '/home/queuefom/public_html/pages/mobile/header.php';

      }
else{
      include 'controllers/navigation/first-navigation.php';} ?> 
<?php include '/home/queuefom/public_html/_database/database.php'?>
<?php include 'controllers/base/style.php' ?>


<!DOCTYPE html>
<html>
<header>
<link href="controllers/base/test.css" rel="stylesheet"> 
</header>


<body>
<h5>Coffee results</h5>


<form action="confirm_page.php"method="post">

<?php include 'components/available-coffee.php' ?>
<div class="sbumit"><button type="submit">send</button></div>
</form>



</body>

<footer>
</footer>
</html>
<?php }?>