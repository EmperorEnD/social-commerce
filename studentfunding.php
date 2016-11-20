<style>
body {
  width: 100%;
  overflow-x: hidden;
  padding:0;
  margin:0;
}
#header{ 
  font-family:'Courier New';
  color: #fff;
  text-align:center;
  margin-top:-15px;
}
span{color:orange;}

.information{
  height:320px;
  width:100%;
 
  border-radius:15px;
}
a{text-decoration: none;}
#one{opacity: 0.8;}
.image{
  height:200px;width:100%;
  //border:1px solid black;
  border-radius:15px;
  float:left;
  position:relative;
  opacity:0.8;
}
.img-cont{
  width:95%;
  padding: 35px 0 15px 0;
  margin:0 auto 0 auto;
}
#img{
  width:170px;height:200px;
  border-radius:15px;
  display: block;
  margin: auto;
  
}
h4 { 
   position: absolute; 
   top: 40px; 
   left: 0; 
   width: 100%; 
}
p2 {font-family:'Pacifico',cursive;font-size:15px;text-transform:uppercase;}


#write{
  width: 150px;
  cursor: pointer;
  display: block;
  margin: auto;
  background: #2aa591 no-repeat center center;
  color:#fff;
  text-transform: uppercase;
  font-size: 20px;
  font-weight: bold;
  border: 0;
  padding: 15px 20px;
  border-radius: 15px;
  outline: 0;
}
#write:hover{background:#2aa591;color: #fff;}

.banner{
  text-align:center;
  font-weight: bold;
  background:#FF6666;
  color:white;
  border-radius:15px;
  width:300px;
  height:200px;
}


.outerwrap{margin-top:30px;}

// Burger

.mid-animate {
    opacity: 0;
}
.container{
  width:100%;height:50px;
  background:#2aa591;
  position: fixed;
  z-index:1000;
  top:0;
  
}
.top-animate {
    background: #2aa591 !important;
    top: 13px !important;
    -webkit-transform: rotate(45deg);
    /* Chrome, Safari, Opera */
    
    transform: rotate(45deg);
}
.bottom-animate {
    background: #2aa591 !important;
    top: 13px !important;
    -webkit-transform: rotate(-225deg);
    /* Chrome, Safari, Opera */
    
    transform: rotate(-225deg);
}

.top-menu {
    top: 5px;
    width: 25px;
    height: 2px;
    border-radius: 10px;
    background-color: #F9A530;
}

.mid-menu {
    top: 13px;
    width: 25px;
    height: 2px;
    border-radius: 10px;
    background-color: #2aa591;
}

.bottom-menu {
    top: 21px;
    width: 25px;
    height: 2px;
    border-radius: 10px;
    background-color: #F9A530;
}

.menui {
    background: #fff;
    transition: 0.6s ease;
    transition-timing-function: cubic-bezier(.75, 0, .29, 1.01);
    margin-top: 10px;
    position: absolute;
}

.icon {
    z-index: 999;
    position: fixed;
    /*    background: rgba(0, 0, 0, 0.21);*/
    
    display: block;
    padding: 9px;
    height: 32px;
    width: 32px;
    margin: 0px;
    top: 0;
    left: 0;
}

.mobilenav {
    /*    top: 47px !important;*/
    
    font-family: inherit;
    top: 0;
    left: 0;
    z-index: 999;
    display: none;
    position: fixed;
    width: 100%;
    //height: 700px;
    background: #fff;
    //opacity: 0.6;
}

.mobilenav li {
    list-style-type: none;
    text-align: center;
    padding: 10px;
}

.mobilenav li a {
    font-size: 150%;
    color: #fff;
    background: #2aa591;
    display: block;
    text-decoration: none;
    padding: 5px 0;
    margin: auto;
    font-weight: 500;
    width: 50%;
    border-bottom:0px solid rgba(16, 144, 67, 1.00);
    transition: ease all 0.3s;
    -webkit-transition: ease all 0.3s;
    -moz-transition: ease all 0.3s;
    -o-transition: ease all 0.3s;
}

.mobilenav li a:hover {
    font-size: 150%;
    color: #fff;
    display: block;
    padding: 5px 0;
    background: #2AA591;
    text-decoration: none;
    font-weight: 300;
    width: 50%;
    //border-bottom:5px solid rgba(16, 144, 67, 1.00)
}

.mobilenav li:first-child {
    margin-top: 50px;
}


div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}

#content
{
   background-color: #f2f2f2;
   padding: 20px 10px;
   overflow: auto;
   
}
#tab-container
{
   float: left;
   margin: 5px 0 0 0;
   width: 126px;
   margin-left:0;
   left:0;
}
#tab-container ul
{
   list-style: none;
   text-align: left;
   font-size: 10px;
}
#tab-container ul li
{
   border-top: 1px solid #666;
   border-right: 1px solid #666;
   border-bottom: 1px solid #666;
   border-left: 2px solid #666;
   background-color: #ddd;
   margin: 2px 0;
}
#tab-container ul li a,
#tab-container ul li a:visited
{
   text-decoration: none;
   color: #666;
   display: block;
   padding: 15px 5px;
}
#tab-container ul li:hover
{
   border-left: 8px solid #333;
}
#tab-container ul li a:hover
{
   color: #000;
}
#tab-container ul li.selected
{
   border-right: none;
   background-color: #fff;
   border-left: 6px solid orange;
   margin-left:0;
   padding-left:0;
}
#main-container
{
   min-height: 100%;
  width:200px;
   margin: 0 0 0 125px;
   border-left:1px solid #888;
   background-color: #fff;
   
   position:absolute;

}
.feed-box {
	 margin: 1em;height:160px;
	 width: 200px;
	 background-color:2aa591;
	 border: 1px solid #2aa591;color:white;
	 border-radius: 25px;text-transform:uppercase;text-align:right;font-size:40%;overflow:auto;
padding-right:5px;

}
.feed-items {
	margin-top:0px;
	padding:0.5em; padding-right:5px;
	margin-left:0px;
	color:#fff;
	text-align:right;
}
p.feed-title {padding:0.5em;}
.feed-title {
        text-transform:uppercase;
	text-decoration: none;
	font-family: Courier New;
	font-size: 10px;
	background-color:#2aa591;
	color:#fff;
	font-weight:bold;
	margin: 0px;
        margin-bottom: 5px;
	padding:0em;
	overflow:auto;text-align:right;width:80px;
}

.feed-item  {
  font-family: Courier New;
  font-size: 10px;
  font-weight : normal;
  list-style:none;
  padding-bottom:0em;
  text-align:right;width:80px;
}

.feed-item a {
	text-decoration : none;
	color: #fff;
	font-size: 10px;
	font-weight:light;
	font-family:Courier New;
	}
	
.feed-item a:hover {
	color:#fff;
}

.feed-img {text-align:left;float:left;margin-left:5px;padding-bottom:8px;}
.feed-date {
	font-size: 8px;
	font-weight : normal;
	color: #fff;
	}
/* buttons modeled from http://www.wellstyled.com/css-inline-buttons.html */
  
.animate
{
	transition: all 0.1s;
	-webkit-transition: all 0.1s;
}

.action-button
{
	position: fixed;
	padding: 10px 40px;
  margin: 0px 10px 10px 0px;
  float: right;
  margin-right:0;
	border-radius: 10px;
	font-family: 'Pacifico', cursive;
	font-size: 15px;
	color: #FFF;
	text-decoration: none;	
	right:0;
	
	bottom:1px;
}

.action-buttoned
{
	position: fixed;
	padding: 5px 5px;
  margin: 0px 5px 5px 0px;
  float: right;
  margin-right:0;
	border-radius: 300px;
	font-family: 'Pacifico', cursive;
	font-size: 10px;
	color: #FFF;
	text-decoration: none;	
	bottom:1px;
}



.orange
{
	background-color: orange;
	border-bottom: 1px solid #BD3E31;
	text-shadow: 0px -2px #BD3E31;
}



.action-button:active
{
	transform: translate(0px,5px);
  -webkit-transform: translate(0px,5px);
	border-bottom: 1px solid;
}
.choose_file{
    position:relative;
    display:inline-block;    
    border-radius:8px;
    border:#ebebeb solid 1px;
    width:250px; 
    padding: 4px 6px 4px 8px;
    font: normal 14px Myriad Pro, Verdana, Geneva, sans-serif;
    color: #7f7f7f;
    margin-top: 2px;
    background:white
}
.choose_file input[type="file"]{
    -webkit-appearance:none; 
    position:absolute;
    top:0; left:0;
    opacity:0; }

</style>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
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

<?php 
include '/home/queuefom/public_html/headers/mobile.php';
?>

<head>
  <meta name="author" content="www.twitter.com/cheeriottis">
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/core.css">
</head>

<div class="container">
<div id="header">
  <h1>pocket|<span style="color:orange">me</span>|</h1>
</div>
    <div class="mobilenav">
       <li><a href="login.php">Login/Signup</a></li>
      
        <li><a href="login.php">My Wallet</a></li>
        <li><a href="login.php"> History</a></li>
        <li><a href="index.php">Home</a></li>

<li><a href="contact.php">Support</a></li>
     </div>
    <a href="javascript:void(0)" class="icon">
        <div class="hamburger">
            <div class="menui top-menu"></div>
            <div class="menui mid-menu"></div>
            <div class="menui bottom-menu"></div>
        </div>
    </a>
    
</div>


<div class="outerwrap">
	<div class="information" id="one">
	
	 <div id="content">
            <div id="tab-container">
                <ul>
                 <li class="selected"><a href="">Latest</a></li>

                    <li class="selected"><a href="">Commerce</a></li>
                    <li class="selected"><a href="">Humanities</a></li>
                    <li class="selected"><a href="">Engineering</a></li>
                    <li class="selected"><a href="">Health</a></li>
                    <li class="selected"><a href="">Science</a></li>
                    <li class="selected"><a href="">Law</a></li>
                     <li class="selected"><a href="">Part-time</a></li>

                </ul>
            </div>
            
<div id="main-container">

		<div class="img-cont">
									
				<div class="image" id="img1">
				
				<head>
  <meta name="author" content="www.twitter.com/cheeriottis">
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/core.css">
</head>
<body>
  <a href="posttostudentfunding.php" class="action-button shadow animate orange">Post!</a>
 
	<?
include "_database/database.php";

$query = mysql_query("SELECT * FROM `Feed` ORDER BY `id` DESC");

$clean = mysql_query("DELETE FROM `Feed` WHERE `market` = ''");

while($row = mysql_fetch_array($query)) 
{
	echo"<div class='feed-box'><h class='feed-title'>".$row['market']."
	<h class='feed-title'>".$row['select type']."
	<br>Post by: ".$row['vendor']."<br>Application link:".$row['link']."</h><br>
	<a class='feed-date'>Opening date: ".date("j F Y", strtotime($row['purchase_date']))."</a><br>
	<a class='feed-date'>Closing date: ".date("j F Y", strtotime($row['purchase_date']))."</a><br>
        <br>Eligibility criteria: ".$row['description']."</a>
        
        </div>"; 
}

?>
</html>