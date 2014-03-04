<?php
$imageurl = "Image Link";
$fp = fopen('log.html', 'a');
$ip = $_SERVER['REMOTE_ADDR'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$port = $_SERVER['REMOTE_PORT'];
$file = $_SERVER['HTTP_REFERER'];
$visitTime = date("M d, h:i A");
$data =" <tr><td>$visitTime</td><td>$ip</td><td></td><td>$port";
fwrite($fp, $data);
fclose($fp);
header("content-type: image/gif");
$image = ImageCreateFromGIF($imageurl);
imagegif($image);
ImageDestroy($image);
exit();
?>
