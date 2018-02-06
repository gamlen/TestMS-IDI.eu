<?php

$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];
$message = $_POST['text'];

    $name = htmlspecialchars(trim($name));
    $email = htmlspecialchars(trim($email));
    $message = htmlspecialchars(trim($message));
    $website = htmlspecialchars(trim($website));


$res = mysqli_query($connection, "INSERT INTO `guestbook` (`name`, `email`, `website`, `text`) VALUES ('$name', '$email', '$website', '$message')");

?>
