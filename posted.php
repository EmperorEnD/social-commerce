<?php
include '/home/queuefom/public_html/_database/database.php';
include '/home/queuefom/public_html/security/form-test/form-validation.php';

if (isset($_POST["post"]))
{
$site = "http://queueme.co.za/";
$target_dir = "postuploads/";
$target_file = $target_dir . basename($_FILES["Upload"]["name"]);
$uploadOk = 0;
$fail = "";
$existence = "";
$size = "";
$type = "";
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$check = getimagesize($_FILES["Upload"]["tmp_name"]);

    if($check !== false)
    {
        $Is_image = "Your file is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    }
    else
    {
        $Is_image = "Your file is not an image.";
        $uploadOk = 0;
    }

if (file_exists($target_file))
{
    $existence = "Your image already exists.";
    $uploadOk = 0;
}

if ($_FILES["Upload"]["size"] > 2048000)
{
    $size = "Your image size is too big.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" )
{
    $type = "Only JPG, JPEG, PNG & GIF images are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0)
{
    $fail = "Your image was not uploaded.";

}
else
{
    if (move_uploaded_file($_FILES["Upload"]["tmp_name"], $target_file))
    {
        $Upload = "Your image ". basename( $_FILES["Upload"]["name"]). " upload succeeded.";
    }
    else
    {
        $Upload = "You image upload failed.";
    }
}

$type = $_POST["type"];
$market = $_POST["market"];
$description = $_POST["description"];
$ask_price = $_POST["price"];
$image = $site.$target_file;
$user_id = $_POST['user'];
$query = mysql_query("INSERT INTO `Feed` (`id`, `vendor`, `type`, `market`, `description`, `ask_price`, `image`) VALUES (NULL, '$user_id', '$type', '$market', '$description', '$ask_price', '$image')");
$reuse = mysql_query("SELECT `id` FROM `Feed` WHERE `vendor` = '$user_id' AND `ask_price` = '$ask_price' ORDER BY `id` DESC LIMIT 1");
$newest_post = mysql_fetch_assoc($reuse);
$feed = $newest_post['id'];
$default = mysql_query("INSERT INTO `Bids` (`id`, `user_id`, `ask`, `bid`, `feed`) VALUES (NULL, '$user_id', '$ask_price', '0.00', '$feed')");

if($query)
{
    echo "<!DOCTYPE HTML>
	          <center>
    			<img src='http://queueme.co.za/xxxx/pictures/logo.jpg'  style='width:300px; height:300px;' href='index.php'>

<body style='width:100%; background-color: #2aa591; font-size:150%;'>

	      	  <h1 style='color:white;'>Success! Your post has been sent and will be displayed as soon as your content has been approved!".$Upload."<br>".$fail."<br>".$existence."<br>".$size."<br>".$type."</h1> 	    	  
<br><form action='http://queueme.co.za/post.php' method='POST' enctype='multipart/form-data' id='UploadForm'>

<center><button type='submit' name='ready' class='btn btn btn-primary ladda-button' value='' style='font-size: 200%; background-color: #ffdd88; border-color: #2aa591; color: #2aa591;' data-style='zoom-in'>RETURN</button></center>
</form><br>
</body>
</center>
</html>";
}
else
{
    echo "<!DOCTYPE HTML>
	          <center>
    			<img src='http://queueme.co.za/xxxx/pictures/logo.jpg' style='width:300px; height:300px;' href='index.php'>

<body style='width:100%; background-color: #2aa591; font-size:250%;'>
	      	  <h1 style='color:white;'>Oops! It seems your post did not send. Please return to the post page and post again".$Upload."<br>".$fail."<br>".$existence."<br>".$size."<br>".$type." </h1>   	    	  
<br><form action='http://queueme.co.za/post.php' method='POST' enctype='multipart/form-data' id='UploadForm'>

<center><button type='submit' name='ready' class='btn btn btn-primary ladda-button' value='' style='font-size: 200%; background-color: #ffdd88; border-color: #2aa591; color: #2aa591;' data-style='zoom-in'>RETURN</button></center>
</form><br>
</body>
</center>
</html>";
}
}
else
{
}
?>