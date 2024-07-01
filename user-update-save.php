<?php
include "./inc/database.php";

$id = $_REQUEST['uid'];
$name = $_POST["name"];
$username = $_POST["uname"];
$mobileno = $_POST["mobileno"];
$type = $_POST["type"];

$db = new Database();
$db->update('users', ['name' => $name,'username' => $username,'mobile_number' => $mobileno,'type' => $type],['user_id' => $id]);

if($db)
{
   echo "Record Updated successfully";
     header("Location:users.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error in Updating record"; // display error message if not delete
}
?>