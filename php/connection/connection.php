<?php
$DBServer = "localhost";
$DBUser = "root";
$DBPassword = "";
$DBName = "bookstore";

$conn = new mysqli($DBServer, $DBUser, $DBPassword, $DBName);

if ($conn->connect_error) {
    trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}