<?php
$host = "localhost";
$user = "root";
$password = "123456";
$db = "testdb";

try{
    $db = new PDO("mysql:host=$host;dbname=$db",$user,$password);
    $db->exec("SET CHARSET UTF8");
}catch(PDOException $e){
    echo $e;
    die ("En error occured");
}
?>