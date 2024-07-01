<?php 
session_start();
include './inc/database.php';   

if (isset($_POST['submit'])) { 
    $user_data = $_SESSION['login_user'];
    $company_id = $_SESSION['company_id'];
    $ledger_name = $_POST["ledger_name"]; 
    $alis = $_POST["alis"];    
    $ledger_type = $_POST["ledger_type"]; 
    $pan_no = $_POST["pan_no"]; 
    $gstin = $_POST["gstin"]; 
    $email = $_POST["email"]; 
    $mobile_no = $_POST["mobile_no"];  
    $address1 = $_POST["address1"]; 
    $address2 = $_POST["address2"]; 
    $city = $_POST["city"]; 
    $pin_code = $_POST["pin_code"]; 
    $state = $_POST["state"]; 
    $route = $_POST["route"]; 
    $bank_name = $_POST["bank_name"];  
    $account_no = $_POST["account_no"]; 
    $ifsc_code = $_POST["ifsc_code"]; 
    $micr_code = $_POST["micr_code"]; 
    $opening_balence = $_POST["opening_balence"];  
    $type = $_POST["type"]; 
}

$db = new Database();
$db->insert("ledger", [
    'company_id' => $company_id,
    'ledger_name' => $ledger_name,
    'alis' => $alis,
    'ledger_type' => $ledger_type,
    'pan_number' => $pan_no,
    'gst_no' => $gstin,
    'email' => $email,
    'mobile_number' => $mobile_no,
    'address1' => $address1,
    'address2' => $address2,
    'city' => $city,
    'pincode' => $pin_code,
    'state' => $state, 
    'route' => $route,
    'bank_name' => $bank_name,
    'account_number' => $account_no, 
    'ifsc_code' => $ifsc_code, 
    'micr_code' => $micr_code,
    'opening_balence' => $opening_balence,
    'type' => $type]);

if ($db) {
    echo "Record Inserted successfully";
    header("Location:ledger.php"); // redirects to all records page
    exit;
} else {
    echo "Error in Inserting record"; // display error message if not delete
}
?>

