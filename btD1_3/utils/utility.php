<?php


function getGet($key){
    if(!empty($_GET)){
        if(isset($_GET[$key])){
            return $data = $_GET[$key];
        }
    }
}

function getPost($key){
        if(isset($_POST[$key])){    
        $data = $_POST[$key];
        $data = str_replace("'", "\\'", $data);
    }
    return $data;
}