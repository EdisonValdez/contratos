<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "contratos";
$dsn = "mysql:host=$host;dbname=$database";

TRY {
$conn = new PDO( $dsn, $username, $password );
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
?>