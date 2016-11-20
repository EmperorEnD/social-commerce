<?php

include '/home/queuefom/public_html/security/form-test/form-validation.php';
include '/home/queuefom/public_html/_database/database.php';

if (isset($_POST["send"]))
{

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$contact = $_POST["contact"];
$reason = $_POST["reason"];
$note = $_POST["note"];

$query = mysql_query("INSERT INTO `Contact` (`id`, `firstname`, `lastname`, `contact`, `reason`, `note`, `log`) VALUES (NULL, '$firstname', '$lastname', '$contact', '$reason', '$note', now())");

if($query)
{
    echo "<!DOCTYPE HTML>
	          <center>
    			<img src='http://queueme.co.za/xxxx/pictures/logo.jpg' alt='q|me|' style='width:209px; height:85px;' href='index.php'>

<body style='width:100%; background-color: #2aa591; font-size:250%;'>

	      	  <h1 style='color:white;'>Success! Your query has been sent. The team shall contact you via email shortly. </h1>   	    	  
	      	  	<a style='background-color: #ffdd88; border-color: #2aa591; color: #2aa591;' href='http://queueme.co.za' class='button'>Return</a>
			</form>
  </body>
 </center>
</html>";
}
else
{
    echo "<!DOCTYPE HTML>
	          <center>
    			<img src='http://queueme.co.za/xxxx/pictures/logo.jpg' alt='q|me|' style='width:209px; height:85px;' href='index.php'>

<body style='width:100%; background-color: #2aa591; font-size:250%;'>
	      	  <h1 style='color:white;'>Failure! Your query has not been sent. Please return to the query page. </h1>   	    	  
	      	  	<a style='background-color: #ffdd88; border-color: #2aa591; color: #2aa591;' href='http://queueme.co.za' class='button'>Return</a>
			</form>
  </body>
 </center>
</html>";
}
}
else
{
}
?>