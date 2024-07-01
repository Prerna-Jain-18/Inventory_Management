<?php

include 'inc/database.php';
$db=new Database();
$term=$_REQUEST['term'];
$item=$db->select("ledger", "*",['ledger_name[~]'=>$term]);
$response=array();
foreach($item as $d)
{
    $response[]= array_merge($d,array("value"=>$d['ledger_id'],
        "label"=>$d['ledger_name']));
//    =array("value"=>$d['ledger_id'],
//        "label"=>$d['ledger_name'],"address");
}
echo json_encode($response);


exit;

