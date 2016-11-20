<?php include 'components/session-check-index.php' ?>
<?php include 'controllers/base/head.php' ?>

<!DOCTYPE html>

<style>
.error {color: blue;}

body
{
  background: #2aa591;
}
option {border:1px solid #fff;color:#fff;background:#2aa591;padding:10px;margin:3px;border-radius:3px}
input {border:1px solid #fff;color:#fff;background:#2aa591;padding:10px;border-radius:3px}
span{color: orange;}

select {
    padding:3px;
    margin: 0;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #f8f8f8;
    color:#888;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
}

/* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
@media screen and (-webkit-min-device-pixel-ratio:0) {
    select {padding-right:18px}
}

label {position:relative}
label:after {
    content:'<>';
    font:11px "Consolas", monospace;
    color:#aaa;
    -webkit-transform:rotate(90deg);
    -moz-transform:rotate(90deg);
    -ms-transform:rotate(90deg);
    transform:rotate(90deg);
    right:8px; top:2px;
    padding:0 0 2px;
    border-bottom:1px solid #ddd;
    position:absolute;
    pointer-events:none;
}
label:before {
    content:'';
    right:6px; top:0px;
    width:20px; height:20px;
    background:#f8f8f8;
    position:absolute;
    pointer-events:none;
    display:block;
}

</style>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>

<center>
<div style="width:100%">
        <div id="title">
          <h1 style="color: #fff;font-family:'Courier New';font-weight:800;font-size:50px;" href="index.php">pocket|<span>me</span></h1>
        </div>
<form action="MAILTO:info@queueme.co.za" method="post" enctype="multipart/form-data">
          <h4 style="color:white">
          <a style="color:white;" href="login.php">Login</a> or <a style="color:orange;" href="signup.php">Sign Up</a>
          <br>
 <input type="text" name="firstname" placeholder="First Name"><br>
 <input type="text" name="lastname" placeholder="Last Name"><br>

 <h4 style="color:white"><input type="text" name="contact"  placeholder="Contact Details"></h4>
<select name="reason">
    <option value="select">Subject..</option>
    <option value="discounts">Discounts and Deals</option>
    <option value="information">Information</option>
    <option value="partnerships">Partnerships</option>
    <option value="technicalsupport">Technical Support</option>
  </select><br> <br> 
<textarea name="note" style="color: white; background-color: #2aa591; border: 1px solid white;" placeholder="Write your note here.." rows="5" cols="27" wrap="physical"></textarea><br><br>    
<button type="submit" style="background-color: #ffdd88; border-color: #2aa591; color: #2aa591;" class="btn btn btn-primary ladda-button;" name="send">Send!</button>
</h4>
</form>
</div>
</center>
</html>