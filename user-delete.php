<?php

require ("./inc/database.php");// Using database connection file here
//include ("form_data.php");


$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
$db = new Database();
$db->delete('users', ['user_id' => $id]);


if($db)
{
   echo "Record deleted successfully";
     header("Location:users.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>