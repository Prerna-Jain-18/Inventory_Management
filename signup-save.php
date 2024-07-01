
<?php
include 'inc/Database.php';

$db = new Database();
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
}
if ($password != $cpassword) {
    echo "<script>alert('Passwords does not match try again');window.location='signup.php';</script>";
} else {
    $insert = $db->insert("users", [
        'name' => $name,
        'username' => $username,
        'mobile_number' => $mobile,
        'password' => $password]);
}
if ($insert) {
    echo "<script>alert('Welcome,You have been registered!!'); window.location = 'login.php';</script>";
} else {

    echo "<script>alert('Something went wrong!!Please try again');
                        window.location = 'signup.php';</script>";
}
?>