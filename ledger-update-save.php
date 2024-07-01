<?php

include "./inc/database.php";

$id = $_REQUEST['lid'];
$name = $_POST["ledger_name"];
$alis = $_POST["alis"];
$ledger_type = $_POST["ledger_type"];
$pan = $_POST["pan_no"];
$gst = $_POST["gstin"];
$email = $_POST["email"];
$mobile = $_POST["mobile_no"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$city = $_POST["city"];
$pin_code = $_POST["pin_code"];
$state = $_POST["state"];
$route = $_POST["route"];
$bank = $_POST["bank_name"];
$account = $_POST["account_no"];
$ifsc = $_POST["ifsc_code"];
$micr = $_POST["micr_code"];
$opening = $_POST["opening_balence"];
$type = $_POST["type"];

$db = new Database();
$db->update('ledger', ['ledger_name' => $name,
    'alis' => $alis,
    'ledger_type' => $ledger_type,
    'pan_number' => $pan,
    'gst_no' => $gst,
    'email' => $email,
    'mobile_number' => $mobile,
    'address1' => $address1,
    'address2' => $address2,
    'city' => $city,
    'pincode' => $pin_code,
    'state' => $state,
    'route' => $route,
    'bank_name' => $bank,
    'account_number' => $account,
    'ifsc_code' => $ifsc,
    'micr_code' => $micr,
    'opening_balence' => $opening,
    'type' => $type], ['ledger_id' => $id]);

if ($db) {
    echo "Record Updated successfully";
    header("Location:ledger-view.php"); // redirects to all records page
    exit;
} else {
    echo "Error in Updating record"; // display error message if not delete
}
?>