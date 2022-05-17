<?php

function getPost($key){
    $value = "";
    if(!empty($_POST)){      
        if(isset($_POST[$key])){
            $value = $_POST[$key];

            $value = str_replace("'", "//'", $value);
        }
    }

    return $value;
}


function getGet($key){
    $value = "";
    if(!empty($_GET)){      
        if(isset($_GET[$key])){
            $value = $_GET[$key];

            $value = str_replace("'", "//'", $value);
        }
    }

    return $value;
}

function getMD5Security($password){
    return md5(md5($password)."acbcaiojfiahufbaisgdf1826471234y");
}