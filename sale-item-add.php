<?php

session_start();
require 'inc/database.php';
$db = new Database();

$item_id = $_REQUEST['item_id'];
$item_name = $_REQUEST['item_name'];
$rate = $_REQUEST['rate'];
$hsn_code = $_REQUEST['hsn_code'];
$qty = $_REQUEST['quantity'];
$gst_rate = $_REQUEST['gst_rate'];
$disc = $_REQUEST['discount'];
$disc_type = $_REQUEST['discount_type'];
$desc = $_REQUEST['description'];

//$items = $db->select("items", "*", ["item_id" => $item_id])[0];
$item = array("item_id" => $item_id,
    "item_name" => $item_name,
    "rate" => $rate,
    "hsn_code" => $hsn_code,
    "quantity" => $qty,
    "gst_rate" => $gst_rate,
    "discount_type" => $disc_type,
    "discount" => $disc,
    "description" => $desc,
    
);
//print_r($item);
if (isset($_SESSION["newSaleBill"])) {

    $bill = $_SESSION['newSaleBill'];
    //$item_id = $item['item_id'];
    $flag = FALSE;
    foreach ($bill as $key => $value) {
        if ($value['item_id'] == $item_id) {

            $bill[$key]['quantity'] += $qty;
            $flag = TRUE;
        }
    }
    if (!$flag) {

        array_push($bill, $item);
    }
    $_SESSION["newSaleBill"] = $bill;
} else {
    $bill = array($item);

    $_SESSION["newSaleBill"] = $bill;
}
//echo "<script>alert('";
//print_r($bill);
//echo "');</script>";
?>