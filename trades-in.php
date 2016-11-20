<!DOCTYPE html>
<center>
<?
include "_database/database.php";

$query = mysql_query("SELECT * FROM `Trades` WHERE `buyer` = '$user' ORDER BY `id` DESC");

while($row = mysql_fetch_array($query))
{
	echo"<div class='feed-box'><h class='feed-title'>".$row['seller']."</h><br>
	<a class='feed-date'>Price: R".$row['price']."</a><br>
	<a class='feed-date'>Traded: ".date("H:i:s", strtotime($row['time']))."<br>".date("j/n/Y", strtotime($row['date']))."</a><br></div>";
}
?>
</center>
</html>