<!DOCTYPE html>
<body>


<?
include "_database/database.php";

$current_user = $_SESSION['user_username'];
$result = mysql_query("SELECT * FROM `user_profile` WHERE `user_email`='$current_user'");
$rws = mysql_fetch_assoc($result);

	echo"
	<center>
         <div class='panel panel-default white' style='position:relative; width:100%;'>
          <div class='panel-heading white' style='position:relative; width:100%;'>";

		$type_vector = mysql_query("SELECT DISTINCT `type` FROM `Feed`");
		$type_twin = mysql_query("SELECT DISTINCT `type` FROM `Feed`");
                
		while($type_row = mysql_fetch_assoc($type_vector))
		{
			$types = $type_row['type'];
			$id_vector = mysql_query("SELECT `id` FROM `Feed` WHERE `type`='$types' ORDER BY `id` DESC LIMIT 1");
			$id_row=mysql_fetch_assoc($id_vector);
			$id=$id_row['id'];
			$point = $id.$types;

			echo "<a style='color:#2AA591; text-align: center' class='panel-title white' data-toggle='collapse' data-parent='#accordion' href='#$point'><b> $types &nbsp;</b></a>";              
		}

		echo"</div>
		<div class='panel-body'>";	
		
		while ($type_set = mysql_fetch_assoc($type_twin))
		{
			$types = $type_set['type'];
			$id_vector = mysql_query("SELECT `id` FROM `Feed` WHERE `type`='$types' ORDER BY `id` DESC LIMIT 1");
			$id_row=mysql_fetch_assoc($id_vector);
			$id=$id_row['id'];
			$point = $id.$types;
			
			echo"  
		          <div id ='$point' class='collapse' style='width:100%;'><h4>$types</h4>";
		
		$query = mysql_query("SELECT * FROM `Feed` WHERE `type` = '$types' AND `approval` = '1' ORDER BY `id` DESC");
		
		while($row = mysql_fetch_array($query)) 
		{
        		$id = $row['id'];
        		$bid_query = mysql_query("SELECT `bid` FROM `Bids` WHERE `feed` = '$id' ORDER BY `bid`	 DESC LIMIT 1");
        		$bid_set = mysql_fetch_assoc($bid_query);
        		$vendor = $row['vendor'];
        		$profile = mysql_query("SELECT `user_profile_picture` FROM `user_profile` WHERE `user_id` = '$vendor'");
       		 	$picture = mysql_fetch_assoc($profile);	
	
		echo"
     <div class='feed-box'>
	<br><h class='feed-title'>
	 <table><tr>
	<td><b>
	Item:".$row['market']."
	<br>Amt:R".$row['ask_price']."
	</b></td> 
	<td>
	<img id='smallimg2' src='".$picture['user_profile_picture']."' alt='No File'>
	<br><br><br><br><br>
	<a href='td01' style='text-align:right;'>
	 ".$vendor."
	</a>
	</td>
		
	</tr></table></h>
	<br><br><br>
	<img class='image' src='".$row['image']."' alt='No File'>
	<br><a class='feed-item' style='text-align:left;float:left;'>
	".$row['description']."
        <br> Highest bid: R".$bid_set['bid']."</a>
        <form action='bid.php' method='POST'>
	            <input type='hidden' name='id' value='".$id."'>
	    	    <input type='hidden' name='price' value='".$row['ask_price']."'>
	    	    <input type='hidden' name='bidder' value='".$rws['user_id']."'>
	    	    <input length='5' name='bid' style='background-color: white; border-radius:20;border:0.1px solid #2aa591;margin:5;font-size:10px;' type='number' placeholder='".$row['ask_price']."'><br><center>
            <input type='submit' name='send' style='background-color: orange; color:white ;border-radius:100%;border:1px solid orange;' class='btn' value='Bid!'></center>
 </form><br></div>";
}
?>
</div>
<?php
}
?>
</div>
</html>