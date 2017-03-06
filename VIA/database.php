<?php
$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'VIA';

try{
	$conn = new PDO("mysql:host=$server;port=8889;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}