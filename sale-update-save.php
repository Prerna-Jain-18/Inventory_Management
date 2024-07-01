<?php
session_start();
include './inc/database.php';
$id = $_REQUEST['sale_id'];


$date = str_replace("/", "-", $_POST['date']);
$date = date("Y-m-d", strtotime($date));
$name = $_POST["customer_name"];
$mobile = $_POST["mobile_no"];
$gst = $_POST["gstin"];
$payment_mode = $_POST["payment_mode"];
$payment_details = $_POST["payment_details"];
$narration = $_POST["narration"];

$db = new Database();
$sale_id = $db->update("sale", [
    'date' => $date,
    'company_id' => $_SESSION['company_id'],
     'mobile_no' => $mobile,
    'gstin' => $gst,
    'payment_mode' => $payment_mode,
    'payment_details' => $payment_details,
    'narration' => $narration], ['sale_id' => $id]);

$ledger_data = $db->select("ledger", "*", ['ledger_id' => $customer_id])[0];
$state = $ledger_data['state'];
if ($sale_id) {
    $bill = $_SESSION['newSaleBill'];
    $total_bill = 0;
    foreach ($bill as $key => $item) {
        $item_id = $item['item_id'];
        $item_name = $item['item_name'];
        $rate = $item['rate'];
        $discount = $item['discount'];
        $discount_type = $item['discount_type'];
        $description = $item['description'];
        $quantity = $item['quantity'];
        $gst = $item['gst_rate'];
        $hsn_code = $item['hsn_code'];

        if ($discount != 0 || $discount != "" || $discount != NULL) {
            if ($discount_type == "Percent") {
                //$discount = $discount . "%";
                $rate_after_discount = $rate - ($rate * $discount / 100);
            } else {
                //$discount = "Rs. " . $i['discount'];
                $rate_after_discount = $rate - $discount;
            }
        } else {
            $rate_after_discount = $rate;
        }

        $total_item = $rate_after_discount * $quantity;
        $igst_item = round(($total_item * $gst / 100), 2);
        $cgst_item = $sgst_item = 0;
        if ($state == "Maharashtra-27") {
            $cgst_item = $sgst_item = round(($igst_item / 2), 2);
            $igst_item = 0;
        }

        $grand_total_item = round(( $total_item + $cgst_item + $sgst_item + $igst_item), 2);
        $total_bill += $grand_total_item;
        $delete = $db->delete("sale_items", ['sale_id' => $id]);
        if ($delete) {
            $sale_entry = $db->insert("sale_items", [
                'sale_id' => $sale_id,
                'item_id' => $item_id,
                'item_name' => $item_name,
                'description' => $description,
                'gst_rate' => $gst,
                'rate' => $rate,
                'quantity' => $quantity,
                'discount_type' => $discount_type,
                'discount' => $discount,
                'rate_after_discount' => $rate_after_discount,
                'total' => $total_bill,
                'cgst' => $cgst_item,
                'sgst' => $sgst_item,
                'igst' => $igst_item,
                'grand_total' => $grand_total_item,
            ]);
        }
    }
    $round_off = $_REQUEST['round_off'];
    $grand_total = $total_bill + $round_off;
    $update = $db->update("Sale", ['round_off' => $round_off,
        'total' => $total_bill,
        'grand_total' => $grand_total], ['sale_id' => $sale_id]);
}

if ($sale_id & $sale_entry) {
    echo "<script>alert('Record updated Successfully')</script>";
} else {
    echo "Error in Inserting record"; // display error message if not delete
}
?>

