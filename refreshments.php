<head>
  <link href='http://fonts.googleapis.com/css?family=Courier' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/core.css">
  <meta name="author" content="www.twitter.com/cheeriottis">
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/core.css">
</head>
<!-- hide<div id="container">

 <a href="getme.php" class="action-button shadow animate orange">Get Me Food!</a></div>-->
<?php

include "_database/database.php";

echo"
<center>
 <div class='panel-group white' id='accordion' style='position:relative; width:100%;'>
   <div class='panel panel-default white' style='position:relative; width:100%;'>
     <div class='panel-heading white' style='position:relative; width:100%;'>";

	$vendor_net = mysql_query("SELECT DISTINCT `username` FROM `Menu`");
	$vendor_matrix = mysql_query("SELECT DISTINCT `username` FROM `Menu`");

	while($vending = mysql_fetch_assoc($vendor_net))
	{
		$vendor_group = $vending['username'];
		$vendor_link = mysql_query("SELECT `vendor_id` FROM `vendor_profile` WHERE `vendor_businessname` = '$vendor_group'");
		$vendor_tie = mysql_fetch_assoc($vendor_link);
		$vendor_id = $vendor_tie['vendor_id'];
		echo "
       <a style='font-family: Pacifico,cursive; color: #2aa591; font-size: 200%;' class='panel-title white' data-toggle='collapse' data-parent='#accordion' href='#$vendor_id'><b>$vendor_group</b></a>";
	}
echo"</div>
     <div class='panel-body'>";	
	
	while($vendors = mysql_fetch_assoc($vendor_matrix))
	{
		$vendor = $vendors['username'];
		$vendor_linked = mysql_query("SELECT `vendor_id`, `vendor_profile_picture` FROM `vendor_profile` WHERE `vendor_businessname` = '$vendor'");
		$vendor_tied = mysql_fetch_assoc($vendor_linked);
		$vendor_ids = $vendor_tied['vendor_id'];
		$image = $vendor_tied['vendor_profile_picture'];
		echo"
     <div id ='$vendor_ids' class='collapse'>
      <img src='$image' alt='' style='width:50%; height:50%; border-radius:100%'>
       <div class='panel-group white' id='accordion' style='position:relative; width:100%;'>
        <form action='edit-profile.php' name='item[]' method='post' style='position:relative'>
         <div class='panel panel-default white' style='position:relative; width:100%;'>
          <div class='panel-heading white' style='position:relative; width:100%;'>";

		$type_vector = mysql_query("SELECT DISTINCT `type` FROM `Menu` WHERE `username`='$vendor'");
		$type_twin = mysql_query("SELECT DISTINCT `type`, `image` FROM `Menu` WHERE `username`='$vendor'");
                
		while($type_row = mysql_fetch_assoc($type_vector))
		{
			$types = $type_row['type'];
			$id_vector = mysql_query("SELECT `id` FROM `Menu` WHERE `type`='$types' AND `username`='$vendor' ORDER BY `id` DESC LIMIT 1");
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
			$visual = $type_set['image'];
			$id_vector = mysql_query("SELECT `id` FROM `Menu` WHERE `type`='$types' AND `username`='$vendor' ORDER BY `id` DESC LIMIT 1");
			$id_row=mysql_fetch_assoc($id_vector);
			$id=$id_row['id'];
			$point = $id.$types;
			
			echo"  
		          <div id ='$point' class='collapse' style='width:100%;'><h4>$types</h4><img src='$visual' alt='' style='width:50%; height:50%; border-radius:100%;'><br>";

			$item_matrix=mysql_query("SELECT DISTINCT `id`, `item`, `price` FROM `Menu` WHERE `username` = '$vendor' AND `type` = '$types'");
		        
			while($check=mysql_fetch_assoc($item_matrix))
			{
				$tag = $check['id'];
				$item = $check['item'];
				$price = $check['price'];
				
				echo"<center><label><input type='checkbox' name='item[$tag]' value='$tag'>
					<span style='width:100%;'><table>
					   	<tr>
					   	<td style='color:white;'>$item</td>
					   	<td style='color:white;'>R$price</td>
					   	</tr>
					   </table></span></label></center>";
			}
		
		echo" </div>";
		
		}
		
		echo "</div>";
		      			
	echo "<input type='submit' class='btn btn btn-primary ladda-button' style='background-color: orange; border-color: orange; color:white;' data-style='zoom-in' name='Submit' value='Order Now!'></center>
           </div>     
         </form>
       </div>
     </div>";
	}
echo"</div>
   </div>
 </div>
</center>
";
?>