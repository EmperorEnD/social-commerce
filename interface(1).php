<!DOCTYPE html>
<html>

<head>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/effects/interface(1).css">
<!--<link rel="stylesheet" type="text/css" href="/effects/search.css">-->

<!-- JQuery -->
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://queueme.co.za/effects/search.js"></script>

<script>
$(document).ready(function() {
    $(".icon").click(function() {
        $(".mobilenav").slideToggle(500);
        $(".top-menu").toggleClass("top-animate");
        $(".mid-menu").toggleClass("mid-animate");
        $(".bottom-menu").toggleClass("bottom-animate");
    });
});
</script>

</head>

<!--<link href='controllers/base/test.css' rel='stylesheet'>-->

<?php

include '/home/queuefom/public_html/headers/mobile.php';

?>

<div class="container">
<div id="header">
  <!--<h1>queue|<span style="color:orange">me</span>|</h1>-->
	
</div>

    <div class="mobilenav">
      <!-- <li><a href="login.php">Login</a></li>
       <li><a href="signup.php">Signup</a></li> -->  
       <li><a href="https://www.walletone.com/wallet/client/">TopMe</a></li>
       <li><a href="contact.php">Contact</a></li>

     </div>
    <a href="javascript:void(0)" class="icon">
        <div class="hamburger">
            <div class="menui top-menu"></div>
            <div class="menui mid-menu"></div>
            <div class="menui bottom-menu"></div>
        </div>
    </a>
    
</div>


<!--<div class="outerwrap">
	<div class="information" id="one">
		<div class="img-cont">
			<div class="image" id="img1">
				<img id="img" src="xxxx/pictures/index/Coffee-to-go.jpg">
 <div class='panel-group white' id='accordion' style='position:relative; width:100%;'>
   <div class='panel panel-default white' style='position:relative; width:100%;'>
     <div class='panel-heading white' style='position:relative; width:100%;'>
				<a class='panel-title white' data-toggle='collapse' data-parent='#accordion' href='coffee'><button>Coffee To Go</button></a>
</div>
</div>
</div>-->

<div id='canvas'>

	</div>
		</div>
		        <div class="image" id="img1">
				<img id="img" src="xxxx/pictures/index/Coffee-to-go.jpg">
				<a href="login.php"><button id="write">Coffee To Go</button></a>
			</div>
			<div class="image" id="img1">
				<img id="img" src="xxxx/pictures/index/food.jpg">
				<a href="login.php"><button id="write">Food To Go</button></a>
			</div>
			<div class="image" id="img1">
				<img id="img" src="xxxx/pictures/index/textbooks.jpg">
				<a href="textbooks.php"><button id="write">Textbooks</button></a>
			</div>
			<div class="image" id="img1">
				<img id="img" src="xxxx/pictures/reading.jpg">
				<a href="studentfunding.php"><button id="write">Student Funding</button></a>
			</div>
			<div class="image" id="img1">
				<img id="img" src="xxxx/pictures/Bike.jpg">
				<a href="studentmarket.php"><button id="write">Market & Events</button></a>
			</div>
			<div class="image" id="img1">
				<img id="img" src="xxxx/pictures/special offers.png">
				<a href="discounts.php"><button id="write">Discounts & Specials</button></a>
			</div>
		</div>
	</div>
</div>

</html>