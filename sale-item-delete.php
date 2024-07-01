<?php
session_start();
$key = $_GET['id'];
$bill = $_SESSION['newSaleBill'];
unset($bill[$key]);
$_SESSION['newSaleBill'] = $bill;
?>
