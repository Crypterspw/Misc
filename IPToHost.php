<?php

error_reporting(0);

if($_POST['getip']) {

    $val = $_POST['site'];
    $site = gethostbyaddr($val);

    echo $site;
}
?>
