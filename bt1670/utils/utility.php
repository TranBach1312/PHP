<?php
    require_once('config.php');
    
    $data = '';
    function getGet($key){
        if(!empty($_GET[$key])){
            $data = $_GET[$key];
        }
        return $data;
    };

    function getPost($key){
        if(!empty($_POST[$key])){
            $data = $_POST[$key];
        }
        return $data;
    };        
    