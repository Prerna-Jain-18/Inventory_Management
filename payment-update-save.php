<?php
include "./inc/database.php";

$id = $_REQUEST['pid'];
$date = $_POST["date"];
$amount_from = $_POST["amount_from"];
$amount_to = $_POST["amount_to"];
$amount_by = $_POST["amount_by"];
$amount = $_POST["amount"];
$details = $_POST["details"];

$db = new Database();
$db->update('payment', ['date' => $date,'amount_from' => $amount_from,'amount_to' => $amount_to,'amount_by' => $amount_by,'amount' => $amount,'details' => $details],['payment_id' => $id]);

if($db)
{
   echo "Record Updated successfully";
     header("Location:payment.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error in Updating record"; // display error message if not delete
}
?>