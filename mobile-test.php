<?php include 'mobile/detection.php' ?>
<?php include 'headers/mobile.php' ?>


<link href="assets/base/mobile-header.css" rel="stylesheet">

<style>
.nav-items
{
  display: inline;
  background:yellow;
}

</style>


<?php if(isMobile())
{?>

<div id="navigation"> 
 
<div class="nav-items" id="logo">Queueme</div>
<div class="nav-items" id="coffee">Coffee</div>
<div class="nav-items" id="food">Food</div>
<div class="nav-items" id="shops">Shops</div>

</div>
  
  
<?php }

else
{?>


<?php } ?>

