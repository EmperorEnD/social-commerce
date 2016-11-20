<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


  <meta name="author" content="www.twitter.com/cheeriottis">
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/core.css">

</head>

<style>
body {
  width: 100%;
  overflow-x: hidden;
  padding:0;
  margin:0;
  background-color:transparent;
  font-family:'Cabin, Arial, sans-serif';color:gray;
}
#header{ 
  font-family:'Courier New';
  color: #fff;
  text-align:left;
  margin-top:-15px;
}
span{color:orange;}



.img-cont{
  width:95%;
  height:100%;
  padding: 35px 0 15px 0;
  margin:0 auto 0 auto;
  border:1px solid lightgray;overflow:auto;
}


#largeimg{
  width:100%;
  height:200px;
 opacity:0.5%;

  margin: auto;
 
}
#mediumimg{
  width:100%;height:150px;
  border-radius:15px;
  margin: auto;
}
#smallimg{
  width:80px;height:80px;
  
  position:center;
  margin: auto;overflow:auto;
}

#smallimg1{
  width:80px;height:80px;
  border-radius:100%;
  position:center;
  margin: auto;overflow:auto;
}
#follow{
  width:40px;height:40px;
  border-radius:100%;
  position:right;
  margin-top:5px;: auto;overflow:auto;
  float:right;
  margin-left:2px;
}





#learnMore{
  width: 100px;
 margin-top:10px;
 margin-bottom:10px;
  cursor: pointer;
  background-color: white;
  border:2px solid gray;
  color:darkgray;
  text-transform: uppercase;
  font-size: 8px;
  font-weight: bold;
  padding: 15px 20px;
  right:0;
  float:right;
}





#main {margin-top:0;}

a{text-decoration: none;}

.container{
  width:100%;height:50px;
  background:#2aa591;
  position: fixed;
  z-index:1000;
  top:0
  
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: gray;
    overflow-x: hidden;
    transition: 0.2s;
    padding-top: 60px;
    text-align:justify;
    font-family:'Cabin, Arial, sans-serif,';
    border:1px solid lightgray;
    font-size:10px;
    text-transform:uppercase;
    color:white;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: uppercase;
    font-size: 16px;
    color: white;
    display: block;
    transition: 0.1s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px !important;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#comingSoon {display:hidden;}

footer {bottom:0;color:orange;}

#blockquote {
text-decoration:italics;
font-size:8px;
font-family: 'Cabin, Arial, sans-serif,';
}
#figure, #figcaption {color:light-gray;
margin:0;
padding:5px;
width:95%;
font-size:10px;
text-align:left;
}
#figcaption {border-bottom:1px solid lightgray;
font-family:'Cabin, Arial, sans-serif,';
}

 
.main , .features,{
  margin-top:0; 
  border:1px solid lightgray;
  height:100%;
  width:100%;
}


#hashtags {left:5px;margin-bottom:5px;text-align:left;position:bottom-left;
}
p2 { font-color: lightgray;}

//for feeds
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
	
	
	font-weight:bold;
	margin: 0px;
        margin-bottom: 5px;
	padding:0em;
	overflow:auto;
}

.feed-item  {
 text-transform:uppercase;
  
  padding-bottom:0em;
;
}

.feed-item a {
		}
	
.feed-item a:hover {
	}


.feed-date {text-transform:uppercase;
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


					<header class="headerNav">
	

			
			    
			
			<h1 style="font-size:200%;text-align:left;margin-left:5px;font-family:'Courier New';font-weight:bold;" onclick="openNav()"> ☰q|<span style="color:orange">me</span>|</h1>
			<li class="head-list"><button id="toggle-basket" class="header-button">Cart</button></li>
			<li class="head-list"><button id="toggle-search" class="header-button">Search</button></li>
			<form id="search-form" action="">
				<fieldset>
					<input name="search-terms" type="search" placeholder="What are you looking for?" />
				</fieldset>
				<input type="submit" value="Ok" />
			</form>
	




		<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="icon">
  			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  	
  <!--logo will come on this line below--> 
  					<center>
  			<p style="color:orange;text-align:center;font-size:8px;font-family:'Cabin,Arial,sans-serif';">
  				<img id="smallimg1" src="xxxx/pictures/logo.jpg">
  					<br>
  			*beta version</p>
  	
       					<a href="my-profile.php">Food</a>
       					<a href="ntextbooks.php">Textbooks</a>
       					<a href="login.php">Careers</a>
       					<a href="login.php">Trade</a>
       					<a href="login.php">Solutions Space</a>
       					<a href=""><?php echo $rws['user_firstname'];?>'s account,&nbsp;R<?php echo $rws['user_balance'];?></a>
       					<a href="components/logout.php"> Logout</a>
       						<br><br>
       			
       
				<div class="footer">

						<p style="font-size:10px;color:white;text-align:center">
	
							queries&feedback: info@queueme.co.za
								<br>

								&copy; MeTech Group 2016
									<br>
										</p>
										</center>
     				</div>
     			</div></div>
      		
</header>	
	<div class="main">
		<div class="img-cont">
			<div id="figure">
			<a href="posttotextbooks.php" class="action-button shadow animate orange">Post!</a>
				<?php

include "_database/database.php";

$query = mysql_query("SELECT * FROM `Feed_Textbooks` ORDER BY `id` DESC");

$clean = mysql_query("DELETE FROM `Feed_Textbooks` WHERE `market` = 'blank'");

while($row = mysql_fetch_array($query)) 
{
	$proof = $row['$image'];
	echo"
		<img id='largeimg' src='".$row['image']."' alt='No File'>
		<div id='figcaption'>
		<h class='feed-title'>".$row['market']."<br>Price: R".$row['ask_price']."<br>Seller: ".$row['vendor']."</h>

	<br> <a class='feed-date'>Purchased: ".date("j F Y", strtotime($row['purchase_date']))."</a>
	<br><a class='feed-item'>Title: ".$row['description']."	
        <br> Condition: ".$row['condition']."
        <br> ISBN number: ".$row['units']."
        <br>".date("H:i:s j/n/Y", strtotime($row['log']))."
          <br><a class='feed-items' href='".$row['link']."'>
          <button id='learnMore'>bid </button></a></div>";
}

?>
</div>
</div></div></div>

</div>
</html>			
				