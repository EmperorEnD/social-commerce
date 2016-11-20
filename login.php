<?php include 'components/session-check-index.php' ?>
<?php include 'controllers/base/head.php' ?>
<!DOCTYPE html>
<style>
body
{

  
  background-image:url('xxxx/pictures/speakmoney.jpg');
  border-radius:100%;
  background-attachment:center;
  background-size:150%;
  background-repeat:no-repeat;
  color:#2aa591;
  //border:1px solid #2aa591;
  font-family:'PT Sans', sans-serif;
}
span{color: orange;}
a { color:#2aa591;
}
#rndimg {border-radius:100%;background-color:white;opacity:0.5;}
.form-group .form-control {border:0.05px solid orange;color:darkgray;
}
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,600);
</style>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>

<div class="container" id="log" style="width:100%">

    <div class="row">

      <div class="main">
    
	      <div id="title">
	      
				
		
	         <h2 style="font-family:'PT Sans', sans-serif;color:#2aa591;text-align:right;">discover social eCommerce </h2>

	      </div>
	      		
          <h4 style="color:#2aa591; text-align:right;"><a href="index.php">Home </a> or <a style="color:orange;"href="signup.php">Sign Up</a></h4>
          <form role="form" action="components/login-process.php" method="post" name="login">
          
              <div class="form-group">
                  <input type="text" class="form-control" id="email" name="vendor_email" placeholder="Email Address">
              </div>
              
              <div class="form-group">
                  <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
              </div>
              
              <button type="submit" class="btn btn btn-primary ladda-button" style="background-color: orange; border-color: orange; color:white;" data-style="zoom-in" value="Sign In" name="login_button">
                  Log In  
              </button>
                        </form>
                        <center>
               <img id="rndimg" src="xxxx/pictures/logo.png" width="150" height="150"/>
</center>

        </div>
    </div>
</div>
</html>