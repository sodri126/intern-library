<?php
include "../../php/connection/connection.php";
$transactionLoanId = $_POST['transaction_loan_id'];
$sql = "UPDATE `transaction_loan` SET `transaction_loan_status`='return' WHERE `transaction_loan_id` =".$transactionLoanId."";
$stmt = $conn->prepare($sql);
$stmt->execute();
session_start();
if ($stmt->execute()) {
    $_SESSION['error_code'] = "success";
} else {
    $_SESSION['error_code'] = "error";
}
header("location: ../index.php?page=lend-book");
?>