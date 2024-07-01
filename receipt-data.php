<?php
session_start();
include './inc/database.php';

if (isset($_POST['submit'])) {
    $user_data = $_SESSION['login_user'];
    $company_id = $_SESSION['company_id'];
    $date = str_replace("/", "-", $_POST['date']);
    $date = date("Y-m-d", strtotime($date));
    $from = $_POST["receipt_from"];
    $to = $_POST["receipt_to"];
    $by = $_POST["receipt_by"];
    $amount = $_POST["amount"];
    $details = $_POST["details"];
}
//use
//include 'database.php';
$db = new Database();
$receipt_id = $db->insert("receipt", [
    'company_id' => $company_id,
    'date' => $date,
    'receipt_from' => $from,
    'receipt_to' => $to,
    'receipt_by' => $by,
    'amount' => $amount,
    'details' => $details]);

if ($receipt_id) {
    $transaction_query = $db->insert("transactions", ['date' => $date,
        'vch_type' => "receipt",
        'vch_id' => $receipt_id,
        'ledger_id' => $from,
        'credit' => $amount,
        'debit' => "0",
        'particular' => $details]);
    $transaction_query = $db->insert("transactions", ['date' => $date,
        'vch_type' => "receipt",
        'vch_id' => $receipt_id,
        'ledger_id' => $to,
        'credit' => "0",
        'debit' => $amount,
        'particular' => $details]);
    echo "Record Inserted successfully";
    //  header("Location:receipt.php"); // redirects to all records page
    exit;
} else {
    echo "Error in Inserting record"; // display error message if not delete
}
?>

