<?php 

define ("DB_HOST" , "localhost");
define("DB_USER", "clinton");
define("DB_PASSWORD", "clinton");
define("DB_NAME", "oop_1");


$conn= new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($conn->connect_error){

	die ("db failed to connect") . connect_error();
}

?>