<?php 
session_start();
include 'components/session-check-index.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'components/coffee-order.php' ?>

<h3>login or signup to receive a notification for your order.</h3>
<div class="container">
    <div class="row">
      <div class="main">
          <h4 style="color:#65aeee;">Log In or <a href="index.php">Sign Up</a></h3>
          <form role="form" action="components/login-process-before.php" method="post" name="login">
              <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="text" class="form-control" id="email" name="vendor_email" placeholder="Email Address">
              </div>
              <div class="form-group">
                  <label for="inputPassword">Password</label>
                  <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn btn-primary ladda-button" data-style="zoom-in" value="Sign In" name="login_button">
                  Log In  
              </button>
          </form>
        </div>
    </div>
</div>