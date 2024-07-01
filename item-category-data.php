<?php

session_start();
include './inc/database.php';

if (isset($_POST['submit'])) {
    $user_data = $_SESSION['login_user'];
    $company_id = $_SESSION['company_id'];
    $name = $_POST["category_name"];
}

$db = new Database();
$data = $db->insert("category", [
    'company_id' => $company_id,
    'category_name' => $name,
        ]);

if ($data) {
    echo "Record Inserted successfully";
    header("Location:item-category.php"); // redirects to all records page
    exit;
} else {
    echo "Error in Inserting record"; // display error message if not delete
}
?>

