<?php
include "./inc/database.php";

$id = $_REQUEST['rid'];
$date = $_POST["date"];
$receipt_from = $_POST["receipt_from"];
$receipt_to = $_POST["receipt_to"];
$receipt_by = $_POST["receipt_by"];
$amount = $_POST["amount"];
$details = $_POST["details"];

$db = new Database();
$db->update('receipt', ['date' => $date,'receipt_from' => $receipt_from,'receipt_to' => $receipt_to,'receipt_by' => $receipt_by,'amount' => $amount,'details' => $details],['receipt_id' => $id]);

if($db)
{
   echo "Record Updated successfully";
     header("Location:receipt.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error in Updating record"; // display error message if not delete
}
?>