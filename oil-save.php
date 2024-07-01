<?php
require './inc/validate.php';
require './inc/database.php';
$rules_array = array(
    'oil_name' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 200, 'trim' => TRUE),
    'oil_rate' => array('type' => 'string', 'required' => TRUE, 'min' => 1, 'max' => 200, 'trim' => TRUE)
);
$val = new validation();
$val->addSource($_REQUEST);
$val->AddRules($rules_array);
$val->run();

if (sizeof($val->errors) > 0) {
    print_r($val->errors);
} else {
    $item = $val->sanitized;
    $db = new Database();
    $isOilAlreadyExists = $db->select("oils", "*", ['oil_name' => $item['oil_name']]);
    if (sizeof($isOilAlreadyExists) > 0) {
        echo "<script>alert('This Oil Name Already Added');window.history.back();</script>";
    } else {
        $oil = $db->insert("oils", [
            'oil_name' => $item['oil_name'],
            'oil_rate' => $item['oil_rate']
        ]);
        if ($oil >= 1) {
            echo "<script>alert('Oil Added Successfully.'); window.location='oil-add.php';</script>";
        } else {
            echo "<script>alert('Failed to add oil. Please add again');window.history.back();</script>";
        }
    }
}
?>