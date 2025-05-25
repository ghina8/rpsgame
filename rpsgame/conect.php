<?php
$dbhost="localhost";
$dbName="rps";
$username="root";
$password="";

$conn = new mysqli("mysql:host=$dbhost;dbName=$dbName",$username,$password);

try{
    echo"Successfully connected withnewdb database";
}
catch(Exception $e){
    die("Connection failed".$e-> getMessage());

}
?>

