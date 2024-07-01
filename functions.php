<?php

session_start();
include './inc/database.php';
$db = new Database();

$url = $_REQUEST['url'];
$ledgers = $db->select("ledger", "*");
$ledger_data = [];
foreach ($ledgers as $l) {
    //$arr =;
    //array_push($ledger_data, $l['ledger_id'] => $l['ledger_name']);
    $ledger_data[$l['ledger_id']] = $l;
}
$_SESSION['ledger_data'] = $ledger_data;
header("location:" . $url);
