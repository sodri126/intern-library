<?php
include "../../php/connection/connection.php";
// $rs = $conn->query();
$transactionHeader = $_POST['transactionHeader'];
$userId = isset($_POST['userId']) || empty($_POST['userId']) ? NULL:$_POST['userId'];
$transactionDetail = $_POST['transactionDetail'];

try {
    $stmt = $conn->prepare("INSERT INTO `transaction_header` VALUES(?,?,NOW());");
    $stmt->bind_param("ss", $transactionHeader, $userId);
    $stmt->execute();
    
    foreach($transactionDetail as $detail) {
        $productIdBev = substr($detail['productId'],0,2) == "BE" ? $detail['productId'] : NULL;
        $productIdBook = substr($detail['productId'],0,2) == "BO" ? $detail['productId'] : NULL;
        if (substr($detail['productId'],0,2) == "BE") {
            $stmt = $conn->prepare("SELECT `bev_id`, `bev_name`, `quantity`, `price` FROM `beverage` WHERE exp_date > NOW() AND `bev_id` = ?");
            $stmt->bind_param("s", $productIdBev);
            $stmt->execute();
            $data = $stmt->get_result()->fetch_assoc();

            $data['quantity'] -= $detail['quantity'];
            $stmt = $conn->prepare("UPDATE `beverage` SET `quantity`= ? wHERE `bev_id` = ?");
            $stmt->bind_param("ds", $data['quantity'], $productIdBev);
            $stmt->execute();
            $stmt = $conn->prepare("INSERT INTO `transaction_detail` VALUES(NULL,?,?,?,?);");
            $stmt->bind_param("ssss", $transactionHeader, $productIdBev, $productIdBook, $detail['typeTransaction']);
            $stmt->execute();
        } else {
            $stmt = $conn->prepare("SELECT `book_id`, `b_name`, `stock`, `price` FROM `book` WHERE stock > 1 and `book_id` = ?");
            $stmt->bind_param("s", $productIdBook);
            $stmt->execute();
            $data = $stmt->get_result()->fetch_assoc();
            
            $data['stock'] -= $detail['quantity'];
            $stmt = $conn->prepare("UPDATE `book` SET `stock`= ? wHERE `book_id` = ?");
            $stmt->bind_param("ds", $data['stock'], $productIdBev);
            $stmt->execute();
            $stmt = $conn->prepare("INSERT INTO `transaction_detail` VALUES(NULL,?,?,?,?);");
            $stmt->bind_param("ssss", $transactionHeader, $productIdBev, $productIdBook, $detail['typeTransaction']);
            $stmt->execute();

            if ($detail['typeTransaction'] == "loan") {
                $transactionDetailId = $conn->insert_id;
                $dueDate = explode("|",$detail['dueDate'])[1];
                $typeLoan = 'loan';
                // insert loan
                $stmt = $conn->prepare("INSERT INTO `transaction_loan` VALUES(NULL,?,?,?,'0000-00-00 00:00:00');");
                $stmt->bind_param("dss", $transactionDetailId, explode("|",$detail['dueDate'])[1], $typeLoan);
                $stmt->execute();
            }
        }
    }
    echo json_encode(["code" => "success"]);
} catch(Exception $e) {
    echo json_encode(["code" => "failed", $e->getMessage()]);
}

?>