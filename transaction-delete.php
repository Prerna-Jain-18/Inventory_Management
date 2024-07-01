<?php

include './inc/database.php';

if (isset($_REQUEST['id']) && isset($_REQUEST['type'])) {
    $id = $_REQUEST['id'];
    $type = $_REQUEST['type'];
    $db = new Database();
    $delete = $db->delete($type, ['id' => $id]);
    $delete_transaction = $db->delete("transactions", ["AND" => ['vch_type' => $type, 'vch_id' => $id]]);


    if ($delete && $delete_transaction) {
        header('location:transaction.php');
    } else {
        echo "<script>alert('Something went wrong!!Please try again'); window.location='transaction.php';</script>";
    }
} else {
    echo "<script>alert('Something went wrong!!Please try again'); window.history.back();</script>";
}
?>