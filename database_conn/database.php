<?php

require_once __DIR__ . "/env.php";

// Colleghiamo il database con la classe mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn && $conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}