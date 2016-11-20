<!DOCTYPE html>
<video autoplay  poster="http://queueme.co.za/assets/img/video/video.png" id="bgvid" loop>
<source src="http://queueme.co.za/assets/img/video/video.webm" type="video/webm">
<source src="http://queueme.co.za/assets/img/video/video.mp4" type="video/mp4">
</video>
<div id="homepage">
<h2>Pocket<span>me</span></h2>
Coming Soon on Mobile Devices, Notebooks and Desktops.<br>

<h3>
<i>Pocketme is a smart money app that brings a <span>personal and exciting edge</span> to dealing with your pockets.  </i>
<br></h3>
<div id="section">

<h1><span>FOR USERS</span></h1>
Sign-up and get:

<ol style="list-style-type:circle">
<li>
Direct access to the great discounts and specials around you. 
</li>
<li>
Avoid waiting periods at your favorite places to buy great food.
</li>
<li>
Save money by buying and selling second-hand items.</li>
<li>Direct access to the financial products that will help your personal finances.
<li>
A <b>FREE and fun</b> service 
</li></ol>
<br>
<h1><span>FOR BUSINESSES</span></h1>
<h> Why choose us?  </h>
<ol style="list-style-type:circle">
<li> Eliminate queues and waiting periods </li>
<li>Join the exciting community of social payments </li>
<li>Boost revenue and stock turnover rates</li>
<li> Offer discounts and deals to a large customer base</li>
<li> Differentiate your store by participating in the most exciting virtual wallet in South Africa</li>
</ol><br>

<h> What you get when you choose us?</h>
<ol style="list-style-type:circle">
<li> Staff and management access controls</li>
<li>A reliable business portal with analytical tools</li>
<li>Transparent pricing </li>
<li> 24/7 support</li>
<li>The ability to keep up to date with your business from your mobile phone</li>
</ol>
<br><br>
<h1><span>FOR ALL</span></h1>
It has never been this <b>great</b> to split the bill, pay friends and buy and sell goods ranging from textbooks to your old guitar.<br><br>

Did we mention that Pocketme is FREE?<br> <i><span>*Refer your favorite stores and venues, refer your friends.</span>

<br><br>

</div>
<div id= "footer">
<i> As Seen On: <br></i><r>
<div id= "img">
<ahref='http://uctupstarts.uct.ac.za'><img src="xxxx/pictures/uct upstarts.png" height="80"width="80"></a>
<a href ='https://entrepreneur.com'><img src="xxxx/pictures/entrepreneurmagSA-logo.jpg"height="80" width="80"></a><br><br>
</div>
<div id="footer">
Powered by <a style="color:red" href="https://www.walletone.com/en-za/wallet/">WalletOneSA</a><br>

&copy Queueme (Pty) Ltd 2015 contact: info@queueme.co.za

</div>
<button>Stop!</button>
</div>

<style>
body {
  margin: 0;
  background: #2aa591; 
}
video { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
 background: url('http://queueme.co.za/assets/img/video/video.png') no-repeat;
  background-size: cover;
  transition: 1s opacity;
}

span
{color: orange;}

.stopfade { 
   opacity: .5;
}

#homepage { 
  font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;
  font-weight:100; 
  background: rgba(0,0,0,0.3);
  color: white;
  padding: 2rem;
  width: 33%;
  margin:2rem;
  float: right;
  font-size: 1.2rem;
}
h1 {
  font-size: 3rem;
  text-transform: uppercase;
  margin-top: 0;
  letter-spacing: .3rem;
}
#homepage button { 
  display: block;
  width: 80%;
  padding: .4rem;
  border: none; 
  margin: 1rem auto; 
  font-size: 1.3rem;
  background: rgba(255,255,255,0.23);
  color: #fff;
  border-radius: 3px; 
  cursor: pointer;
  transition: .3s background;
}
#homepage button:hover { 
   background: rgba(0,0,0,0.5);
}

a {
  display: inline-block;
  color: #fff;
  text-decoration: none;
  background:rgba(0,0,0,0.5);
  padding: .5rem;
  transition: .6s background; 
}
a:hover{
  background:rgba(0,0,0,0.9);
}
@media screen and (max-width: 500px) { 
  div{width:70%;} 
}
@media screen and (max-device-width: 800px) {
  html { background: url(http://queueme.co.za/assets/img/video/video.png) #000 no-repeat center center fixed; }
  #bgvid { display: none; }
}
</style>

<script>
var vid = document.getElementById("bgvid");
var StopButton = document.querySelector("#homepage button");

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed 
vid.pause();
// to capture IE10
vidFade();
}); 


StopButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    StopButton.innerHTML = "Stop";
  } else {
    vid.pause();
    StopButton.innerHTML = "Continue";
  }
})
</script>