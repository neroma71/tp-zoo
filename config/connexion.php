<?php
$dns = "mysql:host=localhost;dbname=zoo";
$user = "root";
$password = "root";

try {
    $bdd = new PDO ($dns,$user,$password);
} catch (Exception $message) {
    echo "il y a un souci <br>" . "<pre>$message</pre>";
}
