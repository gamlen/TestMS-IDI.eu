<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'visitbookms-idi.eu');
mysqli_set_charset($connection,'utf8');

if(mysqli_connect_errno()){

    echo "Problems with connection<br>";
    echo mysqli_connect_error(); 
    exit(); 
}
?>
