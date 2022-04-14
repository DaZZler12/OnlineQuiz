<?php

//MySQLi Procedural
//  $servername = "localhost";
//  $username = "root";
//  $password = "";
//  $dbname = "cbqs";

// Configurasi Web Hosting
$servername = "sql111.epizy.com";
$username = "epiz_31519914";
$password = "JTxbWcIMh8Nfv";
$dbname = "epiz_31519914_cbqs2";





$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
