<?php
include "./inc/database.php";

$id = $_REQUEST['uid'];
$name = $_POST["category_name"];


$db = new Database();
$db->update('category', ['category_name' => $name],['category_id' => $id]);

if($db)
{
   echo "Record Updated successfully";
     header("Location:item-category.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error Updating record"; // display error message if not delete
}
?>