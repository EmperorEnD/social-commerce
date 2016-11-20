<?php
session_name();
session_start();
include '/home/queuefom/public_html/headers/mobile.php';
include '/home/queuefom/public_html/_database/database.php';
include '/home/queuefom/public_html/controllers/base/head.php';

?>

<style>
.error {color: red;}

body
{
  background: #2aa591;
  width:100%;
}

span
{color: orange;}

.main
{
    margin-top:-100px;
    padding-bottom:100px;
}

}
</style>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<?php

$key = $_GET['key'];

$sql=mysql_query("SELECT * FROM `user_profile_unverified` WHERE `user_confirmation` = '$key'");

// When the query is successful
if($sql)
{
	// Count how many rows have this key
	$count = mysql_num_rows($sql);

	// When the key is spotted in the table, retrieve relevant data from table "user_profile_unverified"
	if($count==1)
	{
		$row = mysql_fetch_array($sql);
		$user_id = $row['user_id'];
		$user_email = $row['user_email'];
		$user_password = $row['user_password']; 
		$user_firstname = $row['user_firstname'];
		$user_lastname = $row['user_lastname']; 
		$user_balance = $row['user_balance'];
		$user_joindate = $row['user_joindate'];

		$limit=mysql_query("SELECT * FROM `user_profile` WHERE `user_id` = '$user_id'");
		$log = mysql_num_rows($limit);
			
		if($log>0)
		{
				echo"<!DOCTYPE HTML>
<html>
<head>
<div class='container' id='log'>
    <div class='row'>
        <div class='main'>
            <div id='title'>
	          <center>
			<img src='http://queueme.co.za/xxxx/pictures/logo.jpg' alt='q|me|' style='width:209px; height:85px;' href='index.php'>
                  </center>
	      	  <br><br><h4 style='color:white;'>You have already registered.</h4>
	      	  <center>
	      	  	<form action='login.php' method='post' enctype='multipart/form-data'>
				<input type='submit' name='submit' class='btn btn btn-primary ladda-button' style=background-color: #ffdd88; border-color: #2aa591; color: #2aa591;' data-style='zoom-in' id='submit' value='Login'>
			</form>
		  <center>
                </div>
            </div>
        </div>
    </div>
  </head>
</html>";
		}
			
		else
		{
				$register = mysql_query("INSERT INTO `user_profile`(`id`, `user_id`, `user_email`, `user_password`, `user_firstname`, `user_lastname`, `user_balance`, `user_joindate`) VALUES(NULL, '$user_id', '$user_email', '$user_password', '$user_firstname', '$user_lastname', '$user_balance', '$user_joindate')");			
		}
		
		// Insert data that retrieves from "user_profile_unverified" into table "user_profile" 	
	}
	// When not spotted, display message "Wrong Confirmation Code" 
	else
	{
		echo "<!DOCTYPE HTML>
<html>
<head>

<div class='container' id='log'>
    <div class='row'>
        <div class='main'>
            <div id='title'>
	          <center>
			<img src='http://queueme.co.za/xxxx/pictures/logo.jpg' alt='q|me|' style='width:209px; height:85px;' href='index.php'>
	      	  <br><br><h4 style='color:white;'>Wrong Confirmation Code.</h4>
                  </center>
                </div>
            </div>
        </div>
    </div>
  </head>
</html>";
	}
			
	// When successfully moved data from table 'user_profile_unverified' to table 'user_profile' displays message 'Your account has been activated' and then delete key from table 'user_profile_unverified'
	if($register)
	{
		echo "
<!DOCTYPE HTML>
<html>
<head>

<div class='container' id='log'>
    <div class='row'>
        <div class='main'>
            <div id='title'>
	          <center>
			<img src='http://queueme.co.za/xxxx/pictures/logo.jpg' alt='q|me|' style='width:209px; height:85px;' href='index.php'>
	      	  <br><br><h4 style='color:white;'>Your account has been activated.</h4><br><br>    	    	  
	      	  	<form action='login.php' method='post' enctype='multipart/form-data'>
				<input type='submit' name='submit' class='btn btn btn-primary ladda-button' style='background-color: #ffdd88; border-color: #2aa591; color: #2aa591;' data-style='zoom-in' id='submit' value='Login'>
			</form>
		    <center>
                </div>
            </div>
        </div>
    </div>
  </head>
</html>";	
		// Delete information of this user from table "user_profile_unverified" that has this key 
		$verified = mysql_query("DELETE FROM `user_profile_unverified` WHERE `user_confirmation` = '$key'");
	}
	else
	{
		echo "<!DOCTYPE HTML>
<html>
<head>

<div class='container' id='log'>
    <div class='row'>
        <div class='main'>
            <div id='title'>
	          <center>
			<img src='http://queueme.co.za/xxxx/pictures/logo.jpg' alt='q|me|' style='width:209px; height:85px;' href='index.php'>
	      	  <br><br><h4 style='color:white;'>Your account has not been activated.</h4>
	          </center>
                </div>
            </div>
        </div>
    </div>
  </head>
</html>";
	}		
}
?>