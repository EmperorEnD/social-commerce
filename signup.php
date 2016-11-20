<?php
session_name();
session_start();

if($_SESSION['user_username']!="")
{
 header("location:../index.php");
}

else
{
?>
<?php include '/home/queuefom/public_html/_database/database.php' ;?>
<?php include '/home/queuefom/public_html/components/registration.php';?>
<?php include 'controllers/base/head.php';?>

<!DOCTYPE HTML>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<style>
.error {color: orange;}

body
{

  
  background-image:url('xxxx/pictures/speakmoney.jpg');
  border-radius:100%;
  background-size:150%;
  background-attachment:center;
  background-repeat:no-repeat;
  color:#2aa591;
  //border:1px solid #2aa591;
  font-family:'PT Sans', sans-serif;
  background-color:white;
}
span{color: orange;}
a { color:#2aa591;
}
.form-group .form-control {border:0.01px solid orange;
color:darkgray;
}
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,600);
input {border:1px solid #fff;color:#fff;background:#2aa591;padding:10px 20px;border radius:3px}

.main
{
	  margin-top:-100px;
	  padding-bottom:100px;
}
.choose_file
{
    position:relative;
    display:inline-block;    
    border-radius:2px;
    border:#2aa591 solid 1px;
    width:200px; 
    padding: 4px 6px 4px 8px;
    font: normal 16px Courier New, sans-serif;
    color: #2aa591;
    margin-top: 2px;
    background:white
}
.choose_file input[type="file"]
{
    -webkit-appearance:none; 
    position:absolute;
    top:0; left:0;
    opacity:0; 
}
#smallimg1{
  width:100px;height:100px;
  border-radius:100%;
  position:center;
  margin: auto;
  overflow:auto;
  float:center;
  margin-bottom:5px;
  opacity:0.6;
  background-color:white;
}
</style>

<div class="container" id="log">
    <div class="row">
      <div class="main">
	     <div id="title">
	     <center>
	     <img id="smallimg1" src="xxxx/pictures/logo.png"/>
          <h2 style="color:#2aa591;opacity:0.5;"> Welcome</h2>
          </center>      
	          </div>
		<!--<center>
		<img src="xxxx/pictures/smiley.png" width="30" height="30"/>
		</center>-->
		<span><b><?php echo $confirmation_message; ?></b></span>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		  
		  <div class="form-group">
			   <input type="text" name="user_firstname" class="form-control" placeholder="First Name">
			   <span class="error"> <?php echo $firstnameErr;?></span>
		  </div>
		  
		  <div class="form-group">
			   <input type="text" name="user_lastname" class="form-control" placeholder="Last Name">
			   <span class="error"> <?php echo $lastnameErr;?></span>
		  </div>
		   
		  <div class="form-group"> 
			  <input type="text" name="id"  class="form-control" placeholder="ID/Passport Number">
			   <span class="error"> <?php echo $idErr;?></span>
		  </div>
		  
		    <div class="form-group"> 
			  <input type="text" name="bio"  class="form-control" placeholder="A little about yourself">
			   <span class="error"> <?php echo $bioErr;?></span>
		  </div>
		<div class="form-group"> 
			  <input type="text" name="interests"  class="form-control" placeholder="What do you like (to buy and sell)?">
			   <span class="error"> <?php echo $stdnumErr;?></span>
		  </div>
		<div class="form-group">
			  <input type="text" name="user_email" class="form-control" placeholder="Email Address">
			  <span class="error"> <?php echo $emailErr;?><?php echo $exist;?></span>
		  </div>		   
		  <div class="form-group">
			   <input type="password" name="user_password" class="form-control" placeholder="Password">
			   <span class="error"> <?php echo $passErr;?></span>
		  </div>		  
		  <center>
 		<p style="color:#2aa591; opacity:0.5;">tell us a little bit about yourself</p>
<br>
		  <div class="form-group">
		  <input type="submit" name="submit" class="btn btn btn-primary ladda-button" style="background-color:orange; border-color: orange; color: white;" data-style="zoom-in" id="submit" value="Sign Up">
		  </div>
		  </center>
		</form>
	</div>
     </div>
</div>

</html>
<?php }?>