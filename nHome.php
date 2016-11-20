<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  height:65%;
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
  width:50%;height:80px;
  border-radius:50%;
  margin-top:15px;
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
 margin-top:5px;
  cursor: pointer;
  background-color: white;
  border:2px solid gray;
  color:darkgray;
  text-transform: uppercase;
  font-size: 8px;
  font-weight: bold;
  padding: 15px 20px;
  right:0;
  float:left;
}





#main {margin-top:0;}

a{text-decoration: none;color:gray;}
.container{
  width:100%;height:50px;
  background:#2aa591;
  position: fixed;
  z-index:1000;
  top:0;
  
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
    border:2px solid gray;
    font-size:10px;
    text-transform:uppercase;
    color:white;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: uppercase;
    font-size: 25px;
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
#figure, #figcaption{color:light-gray;
margin:0;
padding:5px;
width:95%;
font-size:10px;
text-align:left;
}

 
.main , .features,{
  margin-top:0; 
  border:1px solid lightgray;
  height:100%;
  width:100%;
}

#feat1, #feat2,#feat3{height:35%;border:1px solid darkgray;font-weight:bold;
		float:left;width:97%;font-size:10px;text-align:center;display:block;overflow:auto;
		
		}
.feat3{right:0;margin-right:15px;}

#hashtags {left:5px;margin-bottom:5px;text-align:left;position:bottom-left;
}

p2 {color: darkgray;font-weight:strong;}
</style>


<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
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
    			<h1 style="font-size:32px;" onclick="openNav()">☰ 
				queue|<span>me</span>|
					</h1>
	</div>


		<div id="mySidenav" class="sidenav">
  
  			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  	
  <!--logo will come on this line below--> 
  					<center>
  			<p style="color:orange;text-align:center;font-size:8px;font-family:'Cabin,Arial,sans-serif';font-weight:none;">
  				<img id="smallimg1" src="xxxx/pictures/logo.jpg">
  					<br>
  			*beta version</p>
  	
       					<a href="login.php">Login/Signup</a>
       					<a href="nsolutionspace.php">Solutions Space</a>
       					<a href="contact.php">Contact</a>
       					<a href="about.php">About</a>
       						<br><br>
       			
       
				<div class="footer">

						<p style="font-size:10px;color:white;text-align:center">
	
							queries&feedback: info@queueme.co.za
								<br>

								&copy; MeTech Group 2016
									<br>
										</p>
     				</div>
     			</div>
      		</div> 
</div>/* ends the container*/

	
	<div class="main">
		<div class="img-cont">
			<div id="figure">
				<img id="largeimg" src="xxxx/pictures/university.jpg" >
					</figure>
			
				<div class="figcaption">
					<tr>
						<td><a href="" ><button id="learnMore">Learn More</button></a></td>
						<td><a href=""><img id="follow" src="xxxx/pictures/twittericon.png" alt="follow"></a></td>
						<td><a href=""><img id="follow" src="xxxx/pictures/facebookIcon.png" alt="follow"></a></td>
						<td><a href=""><img id="follow" src="xxxx/pictures/linkedinIcon.png" alt="follow"></a></td>
				</tr>
					<tr><td><br><br><br><br>
						#socialspace
						#wherestudentslive<br>
		March 2016
					</td></tr>
		</div></div></div>
	</div> <!--main ends here-->
	
	
						<div class="">
<div id="feat1">
<center>
<a href="about.php#students"><img id="mediumimg" src="xxxx/pictures/students.jpg" alt="students">
<p>STUDENTS</p>
<p2 style="text-align:left;">save up to 60% off your student budget. get connected. </p2></a><br>

</center>

</div>

<div id="feat2">
<center>
<a href="about.php#localbiz">
<img id="mediumimg" src="xxxx/pictures/open.jpg"><br>
<p>LOCAL BUSINESS</p>
<p2 style:"text-align:left;"> food vendors, restuarants, stationery shops and much more...
</p2></a>
</center>
</div>

<div id="feat3">
<center>
<a href="about.php#orgs"><img id="mediumimg" src="xxxx/pictures/org.jpg"><br>
<p>ORGANISATIONS</p>
<p2 style="text-align:left;"> a bottom-up approach to problem-solving, HR and PR.</p2></a>
</center>
</div>
</div>
</div>
</div>
</div>			


		
						
		

		 
				
								
			
								
			