<?php session_start();

if($_SESSION['user_username']=="")
{
 header("location:../index.php");
}


else{ 

      include 'components/authentication.php' ;
      include 'components/session-check.php' ;
      include 'controllers/base/head.php' ;
      include '/home/queuefom/public_html/_database/database.php';
      include '/home/queuefom/public_html/headers/mobile.php'; 
      include '/home/queuefom/public_html/mobile/detection.php';

if(isMobile())
      {
      echo "<meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
      <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>";
      }
else
{
      include 'controllers/navigation/first-navigation.php';
}
?>
          
    <div class="container">
	   <div class="no-gutter row"> 
           <div class="col-md-12">
               <div class="panel panel-default" id="sidebar">
                   <div class="panel-body">                
<?php          
    $sql = "SELECT * FROM `user_profile` WHERE `user_id`='$user_username'";
    $result = mysql_query($sql); 
    $rws = mysql_fetch_array($result);    
?>             

<?php include 'controllers/form/collection-form.php' ?>
                   </div>
               </div>
           </div>
        </div>
    </div>
<?php } ?>