<?php
require_once("config.php");

function execute($sql){
    $connect = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($connect, "utf8");

    mysqli_query($connect, $sql);

    mysqli_close($connect);

}

$isSingle = false;

function executeResult($sql, $isSingle){
    
    $connect = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($connect, "utf8");

    $resultset = mysqli_query($connect, $sql);

    $data = null;

    if($isSingle){
        $data = mysqli_fetch_array($resultset, 1);
    }
    else{
        $data = [];
        
        while(($row = mysqli_fetch_array($resultset, 1)) != null){
            $data[] = $row;
        }
    }

    
    mysqli_close($connect);

    return $data;
}