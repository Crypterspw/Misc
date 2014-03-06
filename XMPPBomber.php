<?php
 
include 'XMPPHP/XMPP.php';

$host = "";
$port = 5222;
$username = "";
$password = "";
$resource = "home";
 
$target = "";
$message = "";
$number_of_messages = 50;
 
$conn = new XMPPHP_XMPP($host, $port, $username, $password, $resource);
 
try {
    $conn->useEncryption(true);
    $conn->connect();
    $conn->processUntil("session_start");
    $conn->presence();
   
    for ($x = 0; $x < $number_of_messages; $x++)
        $conn->message($target, $message);  
   
    $conn->disconnect();
} catch(XMPPHP_Exception $e) {
    die($e->getMessage());
}
 
?>
