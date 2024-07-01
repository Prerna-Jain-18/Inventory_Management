<?php
session_start();
$_SESSION['company_id']=$_REQUEST['company_id'];
header("location:index.php");
?>