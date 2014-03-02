<?php
if(isset($_FILES['imagedata']['tmp_name']))
{
	$newName = 'images/' . substr(md5(rand() . time()), 0, 20) . '.png';
    $tf = fopen($newName, 'w');
    fclose($tf);
    move_uploaded_file($_FILES['imagedata']['tmp_name'], $newName);
    echo 'Site Link' . $newName;
}
?>
