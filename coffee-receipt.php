<?php 
session_start();
include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/index-before-login-navigation.php' ?>
<?php include '_database/database.php'?>

<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['item'])) 
{
  echo $_SESSION['item']."<br>";
}

}
?>
