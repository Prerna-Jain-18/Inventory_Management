<?php
session_start();
include './inc/database.php';

if (isset($_POST['submit'])) {
    $user_data = $_SESSION['login_user'];
    $company_id = $_SESSION['company_id'];
    $name = $_POST["name"];
    $username = $_POST["uname"];
    $mobile = $_POST["mobileno"];
    $type = $_POST["type"];
    $password = $_POST["password"];
}

$db = new Database();
$db->insert("users", [
    'name' => $name,
    'username' => $username,
    'mobile_number' => $mobile,
    'type' => $type,
    'password' => $password]);

if ($db) {
    echo "Record Inserted successfully";
    header("Location:users.php"); // redirects to all records page
    exit;
} else {
    echo "Error in Inserting record"; // display error message if not delete
}

?>

