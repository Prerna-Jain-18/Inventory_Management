<?php
session_start();
include './inc/database.php';
$user_data = $_SESSION['login_user'];
$user_id = $user_data['user_id'];
if (isset($_POST['submit'])){  
    $name = $_POST["name"];
    $filename = $_FILES["logo"]["name"];
    $tempname = $_FILES["logo"]["tmp_name"];
    $folder = "logo/" . $filename;
    $pan_no = $_POST["pan"];
    $gst = $_POST["gst"];
    $email = $_POST["email"];
    $landline = $_POST["landline"];
    $mobile_no = $_POST["mobile"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $taluka = $_POST["taluka"];
    $district = $_POST["district"];
    $state = $_POST["state"];
    $country = $_POST["country"];
    $pin_code = $_POST["pincode"];
    $bank_name = $_POST["bank_name"];
    $branch = $_POST["branch"];
    $account_no = $_POST["account_no"];
    $ifsc_code = $_POST["ifsc"];
    $upi = $_POST["upi"];
}

if (move_uploaded_file($tempname, $folder))  {
           $msg = "Image uploaded successfully";
       }
        else{
            $msg = "Failed to upload image";
      }
         
$db = new Database();
$db->insert("company", [
    'user_id'=>$user_id,
    'company_name'=>$name,
    'company_logo'=>$filename,
    'pan_number'=>$pan_no,
    'gst_no'=>$gst,
    'email'=>$email,
    'landline'=>$landline,
    'mobile_number'=>$mobile_no,
    'address1'=>$address1,
    'address2'=>$address2,
    'city'=>$city,
    'taluka'=>$taluka,
    'district'=>$district,
    'state'=>$state,
    'country'=>$country,
    'pincode'=>$pin_code,
    'bank_name'=>$bank_name,
    'branch'=>$branch,
    'account_number'=>$account_no,
    'ifsc_code'=>$ifsc_code,
    'upi_id'=>$upi,
    ]);

if($db)
{
   echo "Record Inserted successfully";
     header("Location:company.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error in Inserting record"; // display error message if not delete
}
?>

