<?php session_start();?>
<?php include 'components/authentication.php' ?> 
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?> 
<?php include 'controllers/base/style.php' ?>

<link href="controllers/base/cofee-confirm.css" rel="stylesheet">          
    <div class="container">
	   <div class="no-gutter row"> 
           <div class="col-md-12">
               <div class="panel panel-default" id="sidebar">
                   <div class="panel-body">                
             
<?php include 'controllers/form/coffee-confirm-form.php' ?>
                   </div>
               </div>
           </div>
        </div>
    </div>