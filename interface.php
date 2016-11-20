<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<meta charset="UTF-8">

<meta name="description" content="Social eCommerce">
<meta name="keywords" content="buy and sell online, textbooks,directory, second-hand clothes, buy celebrity clothes, cape town, students">
<meta name="author" content="www.queueme.co.za">

 <meta name="author" content="www.twitter.com/cheeriottis">
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/core.css">
  <title>Queueme-social ecommerce</title>


  
<script>
jQuery(document).ready(function ($) {

  $('#checkbox').change(function(){
    setInterval(function () {
        moveRight();
    }, 3000);
  });
  
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});    

</script>

<?php include '/home/queuefom/public_html/headers/mobile.php';?>  
  
</head>

<style>

body {
  width: 100%;
  overflow-x: hidden;
  padding:0;
  margin:0;
  background-color:transparent;
   font-family: 'PT Sans', sans-serif;
  color:gray;
}

.container{
  width:100%;
  height:50px;
  background:transparent;
  position: fixed;
  z-index:1000;
  top:0; 
}

#header{ 
  font-family:'Courier New';
  color: #fff;
  text-align:left;
  margin-top:15px;
}
.btn {
border:1px solid lightgray;
border-radius:100%;
padding:8px;

border-style:circle;
}

span{color:orange;}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    margin-left:1 px;
    background-color: #f1f1f1;
    overflow-x: hidden;
    transition: 0.1s;
    padding-top: 20px;
    padding-bottom:20px;
    text-align:center;
    font-family: 'PT Sans', sans-serif;
    font-size:6px;
    color: white;
     border:1px solid white;
     text-transform:uppercase;   
    
}


.sidenav a {
    padding: 8px 8px 8px 32px;
    text-transform: lowercase;
    font-size: 16px;
    color: white;
    transition: 0.1s;
    font-family: 'PT Sans', sans-serif;
	text-decoration:none;
}



.closebtn {
    position: absolute;
    top: 0;
    font-size: 6px;
    margin-left: 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

<!-- imagesCSS-->

#largeimg{
  width:100%;
  height:250px;
 opacity:0.5;
  margin: auto;
 
}
#mediumimglogo{
  width:150px;height:150px;
  border-radius:100%;
  overflow:auto;
 opacity:0.75;

  margin: auto;
}
#mediumimg{
  width:65%;height:150px;
  border-radius:100%;
  overflow:auto;
 

  margin: auto;
}
#smallimg{
  width:80px;height:80px;
  //border-radius:20px;
  margin-right:20px;
  overflow:auto
}

#smallimg1{
  width:80px;height:80px;
  border-radius:100%;
  position:center;
  margin: auto;
  overflow:auto;
  float:center;
  margin-bottom:5px;
}
#smallimg2{
  width:25px;height:25px;
  border-radius:100%;
  position:center;
  margin: auto;
  overflow:auto;
  float:center;
  margin-bottom:5px;
}
#follow {
width:40px;
height:40px;
border-radius:100%;
background-color:white;
}
<!-- end of images-->





#comingSoon {display:hidden;}

<!--rest of body-->

<!--slider-->

@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,600);	


html {
  border-top: 5px solid #fff;
  color: #2a2a2a;
}

html, body {
  margin: 0;
  padding: 0;
  font-family: 'Open Sans';
}



#slider {
  position: relative;
  overflow: hidden;
  margin: 20px auto 0 auto;
  border-radius: 4px;
 // width:100%;
 font-weigth:bold;
 text-transform:uppercase;
 
}

#slider ul {
  position: relative;
  margin: 0;
  padding: 0;
  //height: 300px;
  list-style: none;
}

#slider ul li {
  position: relative;
display: block;
  float: left;
  margin: 0;
  padding: 0;
  width: 285px;
  height: 300px;
  background: #ccc;
  text-align: center;
  line-height: 300px;
  font-size:16px;
  color: orange;
  font-weight:bold;
  background-size:cover;
  background-repeat:no-repeat;
  
  

}

a.control_prev, a.control_next {
  position: absolute;
  top: 40%;
  z-index: 999;
  display: block;
  padding: 4% 3%;
  width: auto;
  height: auto;
  background:lightgray;
  color: black;
  text-decoration: none;
  font-weight: bold;
  font-size: 20px;
  opacity: 0.2;
  cursor: pointer;
}

a.control_prev:hover, a.control_next:hover {
  opacity: 1;
  -webkit-transition: all 0.2s ease;
}

a.control_prev {

  border-radius: 0 2px 2px 0;
}

a.control_next {
  right: 0;
  border-radius: 2px 0 0 2px;
}

.slider_option {
  position: relative;
  margin: 10px auto;
  width: 160px;
  font-size: 18px;
}
<!--end of sliderCSS-->
<!-- section and lower div CSS-->

.p-left {
  float: left;
}

.p-right {
  float: right;
}

.margin-last {
  margin-right: 0;
}



#section-cta {
  background: #fff;
  overflow: hidden;
  font-family: 'PT Sans', sans-serif;
  margin: 40px 0;
  padding: 0 0 20px;
  position:relative;
  width:100%;
}

.section-cta-content {
  margin: 0 auto;
  width: 100%;position:relative;
}

.icon-box {
  margin-top:35px;margin-right:10px;width:100%;
}



.icon-wrap {
  background: #f0f0f0 url(http://mmhimages.fnistools.com/images/RECos/1252/img/box-bg.png); 
  width: 134px;
  height: 134px;
  border-radius: 81px;
  padding: 11px;
  margin: 0 auto;
  z-index: 500;
  overflow: hidden;
  display: block;
  position: relative;
}

.icon-border {
  border: 3px solid #1fb25a;
  border-radius: 81px;
  width: 129px;
  height: 129px;
}

.icon-content {
  background: #fff;
  border-radius: 81px;
  width: 129px;
  height: 129px;
}

span.icon {
  position: relative;
  top: 35px;
  left: 30px;
}

.box-wrap {
  background: #f0f0f0 url(http://mmhimages.fnistools.com/images/RECos/1252/img/box-bg.png);
  width: 300px;
  height: 300px;
  padding: 11px;
  margin: -83px auto 0;
  z-index: 1;
  display: block;
  positiion: relative;
}

.box-content {
  background: #fff;
  width: 260px;
  height: 220px;
  padding: 80px 20px 0;
  position: relative;
}

.box-content h3 {
  margin: 0;
  padding: 0;
  text-align: center;
  font-size: 22px;
}

.box-content p {
  text-align: center;
  color: #737373;
  font-size: 14px
}

.box-content a {
  color: #fff;
  background: orange;
  width: 100px;
  display: block;
  padding: 10px 20px;
  font-size: 12px;
  text-decoration: none;
  text-align: center;
  position: absolute;
  top: 287px;
  margin: 0 62px;
}

#section-mec {
  clear: both;
  background: #f0f0f0;
  overflow: hidden;
  font-family: 'PT Sans', sans-serif;
  padding: 40px 0;
  position:absolute;
  width:100%;
}

.section-mec-content {
  margin: 0 auto;
  width: 100%;
}

.section-mec-content h2 {
  color: #1fb25a;
  font-size: 30px;
  font-weight: 400;
  text-transform: uppercase;
  text-align: left;
  margin-left: 15px;
  margin: 0;
}

.section-mec-content ul {
  margin: 0;
  padding: 20px 0 0;
}

.section-mec-content ul li {
  display: block;
  float: left;
  padding: 0 55px;
}

.section-mec-content ul li a {
  display: block;
  float: left;
}

#section-city {
  font-family: 'PT Sans', sans-serif;
  clear: both;
  padding: 40px 0;
  overflow: hidden;
}

.scc-box {
  margin-left:60px;
  width: 90%;
  border: 1px solid #d2d2d2;
  margin: 0 11px;
  text-align: center;
  font-size: 14px;
}
.scc-box1 {
  margin-left:60px;
  width: 90%;
  border: 1px solid #d2d2d2;
  margin: 0 11px;
  text-align: center;
  font-size: 14px;
  background-image:url('xxxx/pictures/speakmoney.jpg');
  background-repeat:no-repeat;
  background-size:cover;
  background-attachment:left;
}

.scc-box h4 {
  background: #2aa591;
  margin: 0;
  padding: 10px;
  font-weight: 400;
  text-transform: uppercase;
  color: #fff;
  font-size: 24px;
}

.scc-box p {
  margin: 0;
  padding: 0 0 20px;
}

.scc-box ul {
  padding: 10px 0;
}

.scc-box ul li {
  margin: 5px 0;
  list-style:none;
}

.scc-box ul li a {
  color: #7f7f7f;
  font-size: 14px;
  text-decoration: none;
  list-style:none;

}

.scc-box a {
  color: orange;
  text-decoration: none;
}


.footer 
{

position:absolute;
font-family: 'PT Sans', sans-serif;
left:5;
top:75%;
color:#737373;
font-size:6px;
}
table, tr, td {
text-align:justify;
color:#737373;
overflow:hidden;

}
#rnd { border-radius:100%;
}
<!-- image gallery-->

</style>


<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="/effects/search.css">
<link rel="stylesheet" type="text/css" href="/effects/menu.css">

<script src="http://queueme.co.za/effects/search.js"></script>
<script src="http://queueme.co.za/effects/menu.js"></script>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


</script>


<?php include '/home/queuefom/public_html/headers/mobile.php'; ?>
<body>

<div class="container">

		
    				<div id="header">
    			<h1 style="font-size:14px; text-align:left;margin-left:10px;"><span style="color:#2aa591;" class="btn" onclick="openNav()">☰ 
					</h1>
	</div>
	</div>


		<div id="mySidenav" class="sidenav">
  
  			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  	
  <!--logo will come on this line below--> 
  					
  			
  				
  				<img id="smallimg1" src="xxxx/pictures/logo.png">
  					<br>
  			<span>*beta version </span>
  	
       					<a  href="login.php"><img id="rnd" src="xxxx/pictures/profile.png" width="20" height="20"/>login/signup</a>
       					<a  href="about.php"><img  src="xxxx/pictures/info.png" width="20" height="20"/>about</a>
       					<!--<a  href="solutionspace.php">blog</a>						
       					<a  href="">wallet</a>
       					<a  href="">features</a>-->
<div class="footer">
info and feedback: info@queueme.co.za					
&copy; MeTech Group 2016<br> All Rights Reserved
</div>
       						
				     			</div>
      		</div> 
</div>
<!--last div ends the container-->

	
	
	
	<div id="section-city">
  <div class="section-city-content">
  
   <div class="scc-box1">
   <img id="mediumimglogo" src="xxxx/pictures/logo.png" width="250" height="250" alt="qmelogo">

<div id="slider">
  <a href="#" style="opacity:0.5;text-align:left;" class="control_next">&#9758;</a>
  <a href="#" style="opacity:0.5;text-align:left;" class="control_prev">&#9756;</a>
 
  <ul>
    <li style="background-image: url('xxxx/pictures/goods&gadgets.jpg');opacity:0.8;">
    <b>buy & resell your goods</b></li>
    <li style="background-image: url('xxxx/pictures/clothes.jpg');opacity:0.8;"><b> find gently used items</b>
    </li>
  <li style="background-image: url('xxxx/pictures/textbooks.jpg');opacity:0.8;"><b>find a buyer</b></li>
  <!-- insert image with get to know your buyer or seller-->

    <li style="background-image: url('xxxx/pictures/phoneimg.jpg');opacity:0.8;">
   <b> buy and sell on the go </b> </li>
  </ul>  
</div>

<div class="slider_option">
  <input type="checkbox" id="checkbox">
  <label for="checkbox">
  <script type="text/javascript"> 
		var d= new Date();
		document.write(d.toDateString());
		</script>
					
  social ecommerce
  
  
  
  </label>
</div> 


    
      </div>
      	</div>
      		
	

<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<div id="section-cta">
  <div class="section-cta-content">
    <div class="icon-box p-left">
      <div class="icon-wrap">
        <div class="icon-border">
          <div class="icon-content">
            <span class="icon"><img src="http://mmhimages.fnistools.com/images/RECos/1252/img/icon-explore-comm.png" /></span>
          </div>
        </div>
      </div>
      <div class="box-wrap">
        <div class="box-content">
          <h3>Community</h3>
          
<p>Our online community platform is the safest and best way to buy and sell gently used items and collectibles online. We allow buyers and sellers to say more about themselves and choose a buyer or seller.
</p>
          <a href="login.php">Explore Now »</a>
        </div>
      </div>
    </div>
    <div class="icon-box p-left">
      <div class="icon-wrap">
        <div class="icon-border">
          <div class="icon-content">
            <span class="icon"><img src="http://mmhimages.fnistools.com/images/RECos/1252/img/icon-money-sign.png" /></span>
          </div>
        </div>
      </div>
      <div class="box-wrap">
        <div class="box-content">
          <h3>Save</h3>
          <p>Cut out the middleman and use our online platforms to buy, sell and save.Our integrated financial solutions provide you with security, savings and convenience.  </p>
          <a href="signup.php">Get Started »</a>
        </div>
      </div>
    </div>
    <div class="icon-box p-left margin-last">
      <div class="icon-wrap">
        <div class="icon-border">
          <div class="icon-content">
            <span class="icon"><img src="http://mmhimages.fnistools.com/images/RECos/1252/img/icon-account.png" /></span>
          </div>
        </div>
      </div>
      <div class="box-wrap">
        <div class="box-content">
          <h3>Promote</h3>
          <p>We allow users to say more about themselves. That way we're promoting not just safety but the product and the people. Whether you're an artist, a designer, a restuarantier or an entrepreneur.  </p>
          <a href="contact.php">Find out more »</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="section-city">
  <div class="section-city-content">
  
    <div class="scc-box">
      <h4>Top Trade Categories</h4>
      <ul>
        <!--<li><a href="">Accomodation</a></li>-->
        <li><a href="">Textbooks</a></li>
        <li><a href="">Clothes</a></li>
        <li><a href="">Gadgets and tech</a></li>
        <li><a href="">Collectibles</a></li> 
        <li><a href="">Tickets</a></li>
        <li><a href="">Home</a></li>
      </ul>
      <p><a href="">View All</a></p>
    </div>
   
   	</div>		

    <div class="scc-box">
      <h4>Top Promotions and Specials</h4>
      <ul>
        <li><a href="">Down South, Rondebosch- Twosdays Burger Special</a></li>
        <li><a href=""> AB de Villier's bat, used for T20</a></li>
        <li><a href="">Clive Cussler's signed book, The Wreckler</a></li>


      </ul>
      <p><a href="">View All</a></p>
    			</div>
    			   
<div id="section-cta">
  <div class="section-cta-content">
    <div class="icon-box p-left">
      <div class="icon-wrap">
        <div class="icon-border">

          <div class="icon-content">
            <span class="icon"><img src="xxxx/pictures/mouth.png" width="60" height="50" alt="word of mouth"/></span>
          </div>
        </div>
      </div>
      <div class="box-wrap">
        <div class="box-content">
          <h3>Word</h3>
          
<p><i>"Its a great platform to sell my matric dance designer dress.. Safety without the middle man and without the fuss. Like:)"  <br> - Amy</i></p>
          
       </div>
  </div>


      
    <div id="section-city">
  <div class="section-city-content">
  
    <div class="scc-box">
    
      <h4><img id="smallimg" src="xxxx/pictures/uct_upstarts.png"><img id="smallimg" src="xxxx/pictures/entrepreneurmagSA-logo.jpg"></h4>
							
							
															<br>
						<!-- follow us on--> <img id="follow" src="xxxx/pictures/twittericon.png">
								<img id="follow" src="xxxx/pictures/facebookIcon.png">
								<img id="follow" src="xxxx/pictures/linkedinIcon.png"><br>
</div>
</div>
</div>

    <div id="section-city">
  <div class="section-city-content">
  
    <div class="scc-box">
    <table style="background-image:url('xxxx/pictures/logo.png');background-size:cover;">
<tr>
								
<th><a class="btn" href="contact.php">DONATE</a></th>


<td>
<a style="color:#2aa591;" href="about.php">about us</a></td>
<td>
 Address:<br>
  37 Bonair Road, <br> Rondebosch, <br> Cape Town,<br>7701</td></tr>	
<br>
</table>					
&copy; MeTech Group 2016<br> All Rights Reserved
			
								
			
								
											
			
								
			