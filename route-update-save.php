<?php
include "./inc/database.php";

$id = $_REQUEST['uid'];
$name = $_POST["route_name"];


$db = new Database();
$db->update('route', ['route_name' => $name],['route_id' => $id]);

if($db)
{
   echo "Record Updated successfully";
     header("Location:route.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error Updating record"; // display error message if not delete
}
?>