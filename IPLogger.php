<?php
$ip=$_SERVER['REMOTE_ADDR'];
$time = date("l F dS h:i:s A Y");

$myFile = "iplogs.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "$ip $time\n";
fwrite($fh, $stringData);
fclose($fh);
?>