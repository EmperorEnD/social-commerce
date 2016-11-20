<head>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" type="text/css" href="/effects/search.css">
<link rel="stylesheet" type="text/css" href="/effects/menu.css">
<link rel="stylesheet" type="text/css" href="/effects/transfer.css">

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://queueme.co.za/effects/search.js"></script>
<script src="http://queueme.co.za/effects/menu.js"></script>
<script src="http://queueme.co.za/effects/transfer.js"></script>

<?php include '/home/queuefom/public_html/headers/mobile.php';?>


</head>
	<header class="headerNav">
	

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
			
			<h1>pocket|<span style="color:orange">me</span>|</h1>
			<li class="head-list"><button id="toggle-basket" class="header-button">Cart</button></li>
			<li class="head-list"><button id="toggle-search" class="header-button">Search</button></li>
			<form id="search-form" action="">
				<fieldset>
					<input name="search-terms" type="search" placeholder="What are you looking for?" />
				</fieldset>
				<input type="submit" value="Ok" />
			</form>
	</header>
	
	
	
	<div class="fundsnav">
  
			       <li><a href="">Transfer Funds</a></li>
			       
			       <li>
			       <form>
				  To:<br>
				  <input type="text" name="Receipient" placeholder="Cell or Email"><br>
				  Amount:<br>
				  <input type="text" name="Funds" placeholder="Amount">
			      </form>
			     	<button type="submit" form="nameform" value="Submit">Send</button>
			      </li>
							
			</div>
			     
			    <a href="javascript:void(0)" class="funds">
			        <div class="transfer">
				   $
				</div>
			    </a>
	