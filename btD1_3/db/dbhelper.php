<?php
require_once('config.php');

function execute($sql){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');
    mysqli_query($conn, $sql); 
    mysqli_close($conn);
}

function executeResult($sql, $isSingle = true){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');
    $data = null;
    $dataResult = mysqli_query($conn, $sql, 1);
    if($isSingle == true){
        $data = mysqli_fetch_array($dataResult, 1);
    }
    else{
        $data = [];
        while(($row = mysqli_fetch_array($dataResult))!=null){
            $data[] = $row;
        }
    }
    mysqli_close($conn);
    return $data;

}