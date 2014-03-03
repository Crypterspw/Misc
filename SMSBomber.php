<?php
$number = $_POST['number'];
$amount = $_POST['amount'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['from'];

switch($_POST['carrier']){
    case 'Att':
  $carrier = "txt.att.net";
    break;
    case 'Sprint':
  $carrier = "messaging.sprintpcs.com";
    break;
    case 'Verizon':
  $carrier = "vtext.com";
    break;
    case 'T-Mobile':
  $carrier = "tmomail.net";
    break;
}
$number = $number . "@" . $carrier;

if(isset($number)) {
    for($i = 1; $i <= $amount; $i++){
  mail($number,"",$message,$headers);
  echo "Sent";
    } 
}
?>
<table>
<form method="post" action="" >
    <tr><td>Phone number:</td><td><input type="text" name="number" /></td><td>
    <select name="carrier">
  <option>Att</option>
  <option>Sprint</option>
  <option>Verizon</option>
  <option>T-Mobile</option>
    </select>    </td></tr>
    <tr><td>How many times?:</td><td><input type="text" name="amount" /></td></tr>
    <tr><td>Message:</td><td><input type="text" name="message" /></td></tr>
    <tr><td>From:</td><td><input type="text" name="from" /></td></tr>
    <tr><td><input type="submit" value="Send them" /></td></tr>
</form>
</table>  
