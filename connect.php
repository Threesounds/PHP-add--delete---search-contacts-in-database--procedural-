<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "phonebook";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if(!$conn){
	die("Neuspešna konekcija:". mysqli_connect_error());
}
?>