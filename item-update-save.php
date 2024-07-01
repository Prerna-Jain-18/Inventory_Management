<?php
include "./inc/database.php";

$id = $_REQUEST['iid'];
$item = $_POST["item_name"];
$part = $_POST["part_no"];
$description = $_POST["description"];
$unit = $_POST["unit"];
$category = $_POST["category"];
$quantity = $_POST["quantity"];
$hsncode = $_POST["hsn_code"];
$gst = $_POST["gst"];
$mrp = $_POST["mrp"];
$rate = $_POST["rate"];
$selling = $_POST["selling_price"];
$location = $_POST["location"];
$opening = $_POST["opening_stock"];

$db = new Database();
$db->update('items',
        ['item_name' => $item,
         'part_no' => $part,
         'description' => $description,
         'unit' => $unit,
         'category' => $category,
         'quantity' => $quantity,
         'hsn_code' => $hsncode,
         'gst' => $gst,
         'mrp' => $mrp,
         'rate' => $rate,
         'selling_price' => $selling,
         'location_in_shop' => $location,
         'opening_stock' => $opening],['item_id' => $id]);

if($db)
{
   echo "Record Updated successfully";
     header("Location:items.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error in Updating record"; // display error message if not delete
}
?>