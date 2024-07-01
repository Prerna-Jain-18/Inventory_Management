<?php

require ("./inc/database.php");// Using database connection file here
//include ("form_data.php");


$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
$db = new Database();
$db->delete('company', ['company_id' => $id]);


if($db)
{
   echo "Record Deleted Successfully";
     header("Location:company.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error Deleting Record"; // display error message if not delete
}
?>