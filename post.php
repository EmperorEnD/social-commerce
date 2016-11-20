<!DOCTYPE html>

<style>
.error {color: blue;}

body
{
  background: #2aa591;
}
option {border:1px solid #fff;color:#fff;background:#2aa591;padding:10px;margin:3px;border-radius:3px}
input {border:1px solid #fff;color:#fff;background:#2aa591;padding:10px;border-radius:3px}
span {color: orange;}

select {
    padding:3px;
    margin: 0;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #ffdd88;
    color:#2aa591;
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
    color:orange;
    -webkit-transform:rotate(90deg);
    -moz-transform:rotate(90deg);
    -ms-transform:rotate(90deg);
    transform:rotate(90deg);
    right:8px; top:2px;
    padding:0 0 2px;
    border-bottom:1px solid #ffdd88;
    position:absolute;
    pointer-events:none;
}
label:before {
    content:'';
    right:6px; top:0px;
    width:20px; height:20px;
    background:orange;
    position:absolute;
    pointer-events:none;
    display:block;
}
.choose_file{
    position:relative;
    display:inline-block;    
    border-radius:8px;
    border:#ffdd88 solid 1px;
    width:200px; 
    padding: 4px 6px 4px 8px;
    font: normal 14px Myriad Pro, Verdana, Geneva, sans-serif;
    color: #2aa591;
    margin-top: 2px;
    background:white
}
.choose_file input[type="file"]{
    -webkit-appearance:none; 
    position:absolute;
    top:0; left:0;
    opacity:0; 
}
</style>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script>
  ;
  $(document).ready(function() {
    $("#date").datepicker({dateFormat:'d-m-y'});
  });
</script>

<center>
<div style="width:100%">
        <div id="title">
          <h1 style="color: #2aa591;font-family:'Courier New';font-weight:800;font-size:50px;" href="index.php">queue|<span>me</span></h1>
        </div>
<form action="posted.php" method="post" enctype="multipart/form-data" >
          <h4 style="color:#2aa591">
          <a style="color:#2aa591;" href="login.php">Login</a> or <a style="color:orange;" href="signup.php">Sign Up</a>
          <br>
 <p> <b>Post<span>me</span><select name="type">
    <option value="blank">Select Type....</option>
    <option value="textbooks">Textbooks</option>
    <option value="equipment">Equipment</option>
    <option value="electronics">Electronics</option>
    <option value="clothing">Clothing</option>
    <option value="goods">Goods</option>
    <option value="services">Services</option>
    <option value="tickets">Tickets</option>
    <option value="other">Other</option>
  </select></b></p>
    <select name="market">
    <option value="blank">Select Market....</option>
    <option value="all">All</option>
    <option value="commerce">Commerce</option>
    <option value="humanities">Humanities</option>
    <option value="engineering">Engineering</option>
    <option value="science">Science</option>
    <option value="health">Health Sciences</option>
    <option value="law">Law</option>
    <option value="other">Other</option>
  </select><br>
<textarea name="description" style="color: white; background-color: #2aa591; border: 1px solid white;" placeholder="Enter description.." rows="2" cols="27" wrap="physical"></textarea><br>
<input length="50" name="price"  type="number" placeholder="asking price"><br>
<input type="hidden" name="user" value="".$profile_username."">
 <div class="choose_file">
        <span>Upload Image</span>
        <input name="Upload" type="file" id="Upload">
 </div>
<br><br>
<button type="submit" style="background-color: #ffdd88; border-color: #2aa591; color: #2aa591;" class="btn btn btn-primary ladda-button;" name="post"><span>Post!</span></button>
</form>
</div>
</center>
</html>