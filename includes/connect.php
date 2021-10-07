<?php

$dsn ='mysql:host=localhost;dbname=facebook';
$user= 'root';

try{

    $con = new PDO($dsn,$user);
    $con->setAttribute(pdo::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    $e->getMessage();
}