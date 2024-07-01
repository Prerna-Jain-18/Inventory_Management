<?php

include './inc/database.php';
$db = new Database();

$type = $_POST['type'];


$date = str_replace("/", "-", $_POST['date']);
$date = date("Y-m-d", strtotime($date));
$account_from = $_POST["account_from"];
$account_to = $_POST["account_to"];
$mode = $_POST["mode"];
$amount = $_POST["amount"];
$details = $_POST["details"];
$user_id = $_POST['id'];




$transaction_id = $db->insert($type, [
    'company_id' => $company_id,
    'date' => $date,
    'account_from' => $account_from,
    'account_to' => $account_to,
    'mode' => $mode,
    'amount' => $amount,
    'details' => $details]);
/*
  if ($type == 'payment') {
  $trasaction_id = $db->insert("payment", [
  'date' => $date,
  'account_from' => $account_from,
  'account_to' => $account_to,
  'mode' => $mode,
  'amount' => $amount,
  'details' => $details]);
  } else if ($type == 'receipt') {
  $trasaction_id = $db->insert("receipt", [
  'date' => $date,
  'account_from' => $account_from,
  'account_to' => $account_to,
  'mode' => $mode,
  'amount' => $amount,
  'details' => $details]);
  } else if ($type == 'contra') {
  $trasaction_id = $db->insert("contra", [
  'date' => $date,
  'account_from' => $account_from,
  'account_to' => $account_to,
  'mode' => $mode,
  'amount' => $amount,
  'details' => $details]);
  }
 */
// insert query for transactions table

if ($transaction_id) {
    $transaction_query1 = $db->insert("transactions", ['date' => $date,
        'vch_type' => $type,
        'vch_id' => $transaction_id,
        'ledger_id' => $account_from,
        'credit' => $amount,
        'debit' => "0",
        'particular' => $details,
        'user_id' => $user_id,
        'company_id' => 1]);
    $transaction_query2 = $db->insert("transactions", ['date' => $date,
        'vch_type' => $type,
        'vch_id' => $transaction_id,
        'ledger_id' => $account_to,
        'credit' => "0",
        'debit' => $amount,
        'particular' => $details,
        'user_id' => $user_id,
        'company_id' => 1]);


    /*  $transaction_query = $db->insert("transactions", 
      ['date' => $date,
      'vch_type' => $type,
      'vch_id' => $transaction_id,
      'ledger_id' => $account_from,
      'credit' => $amount,
      'debit' => "0",
      'particular' => $details],
      ['date' => $date,
      'vch_type' => $type,
      'vch_id' => $transaction_id,
      'ledger_id' => $account_to,
      'credit' => "0",
      'debit' => $amount,
      'particular' => $details]
      );

     */

    if (!$transaction_query1) {
        //delete entry in payment/receipt/contra

        $db->delete($type, ['id' => $transaction_id]);
    }
    if (!$transaction_query2) {
        //delete entry in payment/receipt/contra
        //delete transaction 1

        $db->delete($type, ['id' => $transaction_id]);
        $db->delete("transactions", ["AND" => ['transaction_id' => $transaction_query1, 'type' => $type]]);
    }
}

header('location:transaction.php?type=' . $type);
?>