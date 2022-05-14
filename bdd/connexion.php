<?php

$user="root";
$pass="";
try{
    $connexion = new PDO( 'mysql:host=127.0.0.1; dbname=appli-scout', $user, $pass);
}catch(Exception $e)

{
    echo (" pb connexion");
};