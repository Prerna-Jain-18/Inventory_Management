<?php
session_start();
include './inc/database.php';
if (isset($_POST['submit'])) {
    $user_data = $_SESSION['login_user'];
    $company_id = $_SESSION['company_id'];
    $date = str_replace("/", "-", $_POST['date']);
    $date = date("Y-m-d", strtotime($date));
    $from = $_POST["from"];
    $to = $_POST["to"];
    $amount = $_POST["amount"];
    $description = $_POST["description"];        
}

$db = new Database();
$db->insert("contra", [
    'company_id'=>$company_id,
    'date'=>$date,
    'from'=>$from,
    'to'=>$to,
    'amount'=>$amount,
    'description'=>$description]);

if($db)
{
   echo "Record Inserted successfully";
     header("Location:contra.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error in Inserting record"; // display error message if not delete
}

?>

