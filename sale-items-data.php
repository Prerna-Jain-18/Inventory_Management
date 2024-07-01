<?php

include './inc/database.php';

if (isset($_SESSION)) {
    $user_data = $_SESSION['login_user'];
    $company_id = $_SESSION['company_id'];
    $description = $_SESSION["description"];
    $gst_rate = $_SESSION["gst_rate"];
    $rate = $_SESSION["rate"];
    $quantity = $_SESSION["quantity"];
    $discount_type = $_SESSION["discount_type"];
    $discount = $_SESSION["discount"];
    if($discount==NULL){
        $discount=0;
    }
    $rate_after_discount = $_SESSION["rate_after_discount"];
    $total = $_SESSION["total"];
    $cgst = $_SESSION["cgst"];
    $sgst = $_SESSION["sgst"];
    $igst = $_SESSION["igst"];
    $grand_total = $_SESSION["grand_total"];
    $deleted = $_SESSION["deleted"];
}

$db = new Database();
$db->insert("sale_items", [
    'description' => $description,
    'gst_rate' => $gst_rate,
    'rate' => $rate,
    'quantity' => $quantity,
    'discount_type' => $discount_type,
    'discount' => $discount,
    'rate_after_discount' => $rate_after_discount,
    'total' => $total,
    'cgst' => $cgst,
    'sgst' => $sgst,
    'igst' => $igst,
    'grand_total' => $grand_total,
    'deleted' => $deleted,
]);

if ($db) {
    echo "Record Inserted successfully";
    header("Location:test.php"); // redirects to all records page
    exit;
} else {
    echo "Error in Inserting record"; // display error message if not delete
}
?>

