<?php
include "./inc/database.php";

$id = $_REQUEST['cid'];
$date = $_POST["date"];
$from = $_POST["from"];
$to = $_POST["to"];
$amount = $_POST["amount"];
$description = $_POST["description"];

$db = new Database();
$db->update('contra', ['date' => $date,'from' => $from,'to' => $to,'amount' => $amount,'description' => $description],['contra_id' => $id]);

if($db)
{
   echo "Record Updated successfully";
     header("Location:contra.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error in Updating record"; // display error message if not delete
}
?>