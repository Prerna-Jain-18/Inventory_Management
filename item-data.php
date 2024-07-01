<?php
session_start();
include './inc/database.php';

if (isset($_POST['submit'])) {
    $user_data = $_SESSION['login_user'];
    $company_id = $_SESSION['company_id'];
    $itemname = $_POST["item_name"];
    $partno = $_POST["part_no"];
    $description = $_POST["description"];
    $unit = $_POST["unit"];
    $quantity = $_POST["quantity"];
    $category = $_POST["category"];
    $hsncode = $_POST["hsn_code"];
    $gst = $_POST["gst"];
    $mrp = $_POST["mrp"];
    $rate = $_POST["rate"];
    $sellingprice = $_POST["selling_price"];
    $location = $_POST["location"];
    $openingstock = $_POST["opening_stock"];

    $db = new Database();
    $id = $db->insert("items", [
        'company_id' => $company_id,
        'item_name' => $itemname,
        'part_no' => $partno,
        'description' => $description,
        'unit' => $unit,
        'category' => $category,
        'quantity' => $quantity,
        'hsn_code' => $hsncode,
        'gst' => $gst,
        'mrp' => $mrp,
        'rate' => $rate,
        'selling_price' => $sellingprice,
        'location_in_shop' => $location,
        'opening_stock' => $openingstock]);

    $db->insert("inventory", [
        'item_id' => $id,
        'quantity' => $openingstock,
        'vch_type' => 'Opening Balance',
        'vch_id' => $id,
    ]);

    if ($db) {
        echo "Record Inserted successfully";
        header("Location:items.php"); // redirects to all records page
        exit;
    } else {
        echo "Error in Inserting record"; // display error message if not delete
    }
}
?>

