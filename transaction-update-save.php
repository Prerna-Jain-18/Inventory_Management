<?php

include "./inc/database.php";
$db = new Database();

$id = $_REQUEST['id'];
$type = $_REQUEST['type'];

$date = str_replace("/", "-", $_POST['date']);
$date = date("Y-m-d", strtotime($date));
$account_from = $_POST["account_from"];
$account_to = $_POST["account_to"];
$mode = $_POST["mode"];
$amount = $_POST["amount"];
$details = $_POST["details"];

$transaction_id = $db->update($type, [
    'date' => $date,
    'account_from' => $account_from,
    'account_to' => $account_to,
    'mode' => $mode,
    'amount' => $amount,
    'details' => $details], ['id' => $id]);


if ($transaction_id) {
    $transaction_query1 = $db->update("transactions", ['date' => $date,
        'ledger_id' => $account_from,
        'credit' => $amount,
        'debit' => "0",
        'particular' => $details], ["AND" => ['vch_id' => $id, 'vch_type' => $type]]);
    $transaction_query2 = $db->update("transactions", ['date' => $date,
        'ledger_id' => $account_to,
        'credit' => "0",
        'debit' => $amount,
        'particular' => $details], ["AND" => ['vch_id' => $id, 'vch_type' => $type]]);
}

header('location:transaction.php?type=' . $type);
?>
