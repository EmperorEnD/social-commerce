<head>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" type="text/css" href="/effects/transfer.css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<style>body{background:#2aa591}</style>
<script >
$(document).ready(function() {
    $(".funds").click(function() {
        $(".fundsnav").slideToggle(500);
    });
});

</script>
<?php include '/home/queuefom/public_html/headers/mobile.php';?>
</head>


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
			