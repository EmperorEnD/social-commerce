<!DOCTYPE html>
<center>
<?
include "_database/database.php";

$query = mysql_query("SELECT * FROM `PointOfSale` WHERE `user` = '$user' AND `status` = '1' ORDER BY `id` DESC");

while($row = mysql_fetch_array($query))
{
	echo"<div class='feed-box'><h class='feed-title'>".$row['order']."</h><br>
	<a class='feed-date'>Price: R".$row['total']."</a><br>
	<h style='color:orange; font-weight:bold;'>Vendor: ".$row['vendor']."<br></h>
	<a class='feed-date'>Purchased: ".date("H:i:s", strtotime($row['time']))."<br>".date("j/n/Y", strtotime($row['date']))."</a><br><form action='repeat.php' method='POST'>
	    <input type='hidden' name='id' value='".$row['id']."'><br>
            <input type='submit' name='submit' style='background-color: orange; border-color: orange; color: white;' value='Order Again!'>
 </form><br></div>";
}
?>
</center>
</html>