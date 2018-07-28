<?php
include "../../php/connection/connection.php";
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT `book_id`, `b_name`, `stock`, `price` FROM `book` WHERE stock > 1 and `book_id` = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
echo json_encode($data);