<?php
include 'inc/database.php';
$db=new Database();
$term=$_REQUEST['term'];
$item=$db->select("items", "*",['item_name[~]'=>$term]);
$response=array();
foreach($item as $d)
{
    $response[]= array_merge($d,array("value"=>$d['item_id'],
        "label"=>$d['item_name']));
//    =array("value"=>$d['ledger_id'],
//        "label"=>$d['ledger_name'],"address");
}
echo json_encode($response);


exit;



