<?php

require_once('../db/config.php');

function execute($sql){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');

    mysqli_query($conn, $sql, 1);

    mysqli_close($conn);
};

$isSingle = false;
function executeResult($sql, $isSingle){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');
    $data = null;
    $result = mysqli_query($conn, $sql, 1);
    if($isSingle){
        $data = mysqli_fetch_array($result, 1);
    }
    else{
        $data = [];
        while(($row = mysqli_fetch_array($result, 1))!=null){
            $data[] = $row;
        }
    }
    return $data;
    mysqli_close($conn);
}