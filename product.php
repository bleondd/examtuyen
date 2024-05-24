<?php 
require_once("database.php");

function show_contact(){
    $sql = "select * from contact";
    $result = query($sql);
    $list = [];
    while ($row = $result ->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function edit_contact(){
    $sql = "select * from contact where id";
    $result = query($sql);
    $product = null;
    while($row = $result->fetch_assoc()){
        $product = $row;
    }
    if($product == null){
        header("Location: /404_notfound.php");
        return;
    }
}