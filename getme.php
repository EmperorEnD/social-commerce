<style>

 .image { 
   position: fixed; margin-top:60px;padding:15px;opacity:0.7;padding-left:0;height:50%;
   width: 100%; /* for IE 6 */
}
#smallimg1{
  width:80px;height:80px;
  border-radius:100%;
  position:center;
  margin: auto;overflow:auto;
}
#largeimg{
  width:100%;
  height:200px;
 opacity:0.5%;

  margin: auto;
 
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


h2 { 
   position: absolute; 
   top: 200px; 
   left: 0; 
   width: 100%; 
   font-family:Courier New;font-size:20px;color:black;opacity:1;
} 
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


span {color:orange;}
</style>
<head>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" type="text/css" href="/effects/search.css">
<link rel="stylesheet" type="text/css" href="/effects/menu.css">
<link rel="stylesheet" type="text/css" href="/effects/transfer.css">
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://queueme.co.za/effects/search.js"></script>
<script src="http://queueme.co.za/effects/menu.js"></script>
<script src="http://queueme.co.za/effects/transfer.js"></script>

  <meta name="author" content="www.twitter.com/cheeriottis">
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/core.css">

<?php include '/home/queuefom/public_html/headers/mobile.php';?>

</script>
</head>
<body>	<header class="headerNav">
	

			
			    
			
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
     			</div>
      			
	
	
	
	<div class="fundsnav">
  
			       <li><a href="">Buy me food!</a></li>
			       
			       <li>
			       <form>
				  To:<br>
				  <input type="text" name="Receipient" placeholder="Cell or Email"><br><br>
				  Amount+Tip:<br>
				  <input type="text" name="Funds" placeholder="Amount"><br><br>
				  Order list:<br>
				  <textarea name="description" style="color:black;border: 1px solid black;" placeholder=" enter order/shopping list.." rows="5" cols="20" wrap="physical"></textarea>
				  
				  <br>Remember how I like it:<br>
				  <input type="text" name="additional info" placeholder="NB!">
			      </form>
			     	<button type="submit" form="nameform" value="Submit">Send</button>
			      </li>
							
			</div>
			     
			    <a href="javascript:void(0)" class="funds">
			        <div class="transfer">
				   R
				</div>
			    	</a>
			    	</div>
			   </header>	
	<div class="main">
		<div class="img-cont">
			<div id="figure">
