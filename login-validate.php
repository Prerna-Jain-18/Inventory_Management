<?php

session_start();
include 'inc/Database.php';
$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // email and password sent from form 

    $mobile = $_POST['mobile'];
    $pass = $_POST['pass'];
}
$user_login = $db->select("users", "*", ["AND" => ['mobile_number' => $mobile, 'password' => $pass]]);
if (sizeof($user_login) > 0) {

    $_SESSION['login_user'] = $user_login[0];
    
    header("Location:select-company.php");
} else {
    echo "<script>alert('Invalid Username or Password');window.location='login.php';</script>";
}
?>
