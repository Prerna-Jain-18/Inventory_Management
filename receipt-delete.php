<?php

require ("./inc/database.php");// Using database connection file here
//include ("form_data.php");


$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
$db = new Database();
$db->delete('receipt', ['receipt_id' => $id]);


if($db)
{
   echo "Record Deleted Successfully";
     header("Location:receipt.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error Deleting record"; // display error message if not delete
}
?>