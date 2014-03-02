<?php
if (empty($_POST) === false) {
    
    $errors = array();
    
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $message    = $_POST['message'];
   
    if (empty($name) === true || empty($email) === true || empty($message) === true) {
       $errors[] = 'Sorry, all fields are required.';
    } else { 
       if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
           $errors[] = 'Please use a valid E-Mail address.';
       }
    }

    if(empty($errors) === true) { 
       mail('admin@starvin-marvin.com', 'Contact Form (Starvin-Marvin)', $message, 'From: ' . $email);
       
       $ip=$_SERVER['REMOTE_ADDR'];
       $time = date("l dS F Y");

       $myFile = "Logs.txt";
       $fh = fopen($myFile, 'a') or die("can't open file");
       $stringData = "An E-Mail was sent from this address at the corresponding date and time: $ip $time\n";
       fwrite($fh, $stringData);
       fclose($fh);
    }

    if (empty($errors) === false) {
        echo '<ul>';
        foreach($errors as $error) {
        echo '<li>', $error,'</li>';
    }
}

    if(isset($_GET['sent']) === true) {
       echo 'Thank you for contacting me!';
    }


}
?>
