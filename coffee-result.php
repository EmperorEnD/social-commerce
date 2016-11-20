<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/index-before-login-navigation.php' ?>
<?php include '_database/database.php';?>


<!DOCTYPE html>
<html>
<header>
<link href="controllers/base/test.css" rel="stylesheet"> 
</header>


<body>
<h5>Coffee results</h5>


<form action="login-before.php"method="post">

<?php include 'components/available-coffee.php' ?>
<div class="sbumit"><button type="submit">send</button></div>
</form>



</body>








<footer>
</footer>
</html>