<?php
session_start();
include './inc/database.php';

if (isset($_POST['submit'])) {
    $user_data = $_SESSION['login_user'];
    $company_id = $_SESSION['company_id'];
    $date = str_replace("/", "-", $_POST['date']);
    $date = date("Y-m-d", strtotime($date));
    $payment_from = $_POST["payment_from"];
    $payment_to = $_POST["payment_to"];
    $payment_by = $_POST["payment_by"];
    $amount = $_POST["amount"];
    $details = $_POST["details"];
}
//use
//include 'database.php';
$db = new Database();
$payment_id = $db->insert("payment", [
    'company_id' => $company_id,
    'date' => $date,
    'amount_from' => $payment_from,
    'amount_to' => $payment_to,
    'amount_by' => $payment_by,
    'amount' => $amount,
    'details' => $details]);

if ($payment_id) {
    $transaction_query = $db->insert("transactions", ['date' => $date,
        'vch_type' => "payment",
        'vch_id' => $payment_id,
        'ledger_id' => $payment_to,
        'credit' => "0",
        'debit' => $amount,
        'particular' => $details]);
    $transaction_query = $db->insert("transactions", ['date' => $date,
        'vch_type' => "payment",
        'vch_id' => $payment_id,
        'ledger_id' => $payment_from,
        'credit' => $amount,
        'debit' => "0",
        'particular' => $details]);
    echo "Record Inserted successfully";
    header("Location:payment.php"); // redirects to all records page
    print_r($db->last_query());
    exit;
} else {
    echo "Error in Inserting record"; // display error message if not delete
}
?>

