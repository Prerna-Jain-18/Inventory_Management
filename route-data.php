<?php
session_start();
include './inc/database.php';

if (isset($_POST['submit'])) {
    $user_data = $_SESSION['login_user'];
    $company_id = $_SESSION['company_id'];
    $name = $_POST["route_name"];
}

$db = new Database();
$db->insert("route", [
    'company_id' => $company_id,
    'route_name' => $name,
]);

if ($db) {
    echo "Record Inserted successfully";
    header("Location:route.php"); // redirects to all records page
    exit;
} else {
    echo "Error in Inserting record"; // display error message if not delete
}
?>

