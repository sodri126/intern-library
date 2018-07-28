<?php
include "../../php/connection/connection.php";
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT `bev_id`, `bev_name`, `quantity`, `price` FROM `beverage` WHERE exp_date > NOW() AND `bev_id` = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
echo json_encode($data);