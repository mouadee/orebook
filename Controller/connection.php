<?php

// Start connection with the satabases

$host = "localhost";
$dbuser = "root";
$dbname = "orebook";
$dbpass = "";

// try ro connect to database
try {
  $con = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo "canno't connect to this database" . $e->getMessage();
}