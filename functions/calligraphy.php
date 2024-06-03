<?php

require_once("database.php");

function callig_all(){
    $sql = "select * from calligraphies";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}

function callig_detail($callig_id)  {
    $sql = "select * from calligraphies where id = $callig_id";
    $result = query($sql);
    if($result->num_rows > 0){
        return $result->fetch_assoc();
    }
    return null;
}