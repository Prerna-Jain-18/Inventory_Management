<?php
include './inc/database.php';

$date = str_replace("/", "-", $_POST['date']);
$date = date("Y-m-d", strtotime($date));
$reference = $_POST["referance"];
$payment_mode = $_POST["payment_mode"];
$payment_details = $_POST["payment_details"];
$customer_name = $_POST["customer_name"];
$customer_id=$_POST["customer_id"];
$name = $_POST["name"];
$address = $_POST["address"];
$mobile_no = $_POST["mobile_no"];
$gstin = $_POST["gstin"];
$narration = $_POST["narration"];

$db = new Database();
$insert = $db->insert("purchase", [
    'date' => $date,
    'referance' => $reference,
    'payment_mode' => $payment_mode,
    'payment_details' => $payment_details,
    'customer_name' => $customer_name,
    'name' => $name,
    'address' => $address,
    'mobile_no' => $mobile_no,
    'gstin' => $gstin,
    'narration' =>$narration,
    ]);

if ($insert) {
    echo "Record Inserted successfully";
    header("Location:test.php"); // redirects to all records page
    exit;
} else {
    echo "Error in Inserting record"; // display error message if not delete
}
?>

