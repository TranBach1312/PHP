<?php

        $a = $b = $cal = $result = '';
        if(!empty($_GET)){
            if(isset($_GET['a'])){
                $a = $_GET['a'];
            }
            if(isset($_GET['b'])){
                $b = $_GET['b'];
            }
            if(isset($_GET['cal'])){
                $cal = $_GET['cal'];
            }
        }
        if($a == ''){
            $a = 0;
            $cal = '+';
        }
        if($b == ''){
            $b = 0;
            $cal = '+';
        }
        
        switch($cal){
            case '+':
                $result = $a + $b;
                $a = $result;
                $b = $cal ='';
                break;
            case '-':
                $result = $a - $b;
                $a = $result;
                $b = $cal ='';
                break;
            case 'x':
                $result = $a * $b;
                $a = $result;
                $b = $cal ='';
                break;
            case '/':
                if($b == 0){
                    $cal = '+';
                    $result = 'Khong tinh duoc';
                }
                else{
                    $result = $a / $b;
                $a = $result;
                $b = $cal ='';
                }   
                break;        
            case '%':
                $result = $a % $b;
                $a = $result;
                $b = $cal ='';
                break;        
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
    <form method="GET" id="myForm" style="display: none;">
        <input type="number" value="<?=$a?>" name="a">
        <input type="text" value="<?=$cal?>"  name="cal">
        <input type="number" value="<?=$b?>" name="b">       
    </form>
    

    <div class="container">
        <div class="display-area">
            <input type="text" value="<?=$result?>" disabled id="result">
        </div>
        <div class="row">
            <input type="button" readonly value="AC">
            <input type="button" readonly value="C">
            <input type="button" readonly value="%">
            <input type="button" readonly value="/">
        </div>
        <div class="row">
            <input type="button" readonly value="7">
            <input type="button" readonly value="8">
            <input type="button" readonly value="9">
            <input type="button" readonly value="x">
        </div>
        <div class="row">
            <input type="button" readonly value="4">
            <input type="button" readonly value="5">
            <input type="button" readonly value="6">
            <input type="button" readonly value="-">
        </div>
        <div class="row">
            <input type="button" readonly value="1">
            <input type="button" readonly value="2">
            <input type="button" readonly value="3">
            <input type="button" readonly value="+">
        </div>
        <div class="row">
            <input type="button" readonly value="0">
            <input type="button" readonly value=".">
            <input type="button" readonly value="=">
        </div>
    </div>

    <script>
        var v
        $(function(){
            $('input').click(function(){
                v = $(this).val()
                switch(v){
                    case '+':
                    case '-':
                    case 'x':
                    case '/':
                        $('[name=cal]').val(v)
                        break;
                    case '=':
                        $('#myForm').submit()
                        break;
                    case 'AC':
                    case 'C':
                        $('[name=a]').val('');
                        $('[name=b]').val('');
                        $('[name=cal]').val('');    
                    default:
                        if ($('[name=cal]').val() != ""){
                            $('[name=b]').val($('[name=b]').val() + v)
                        }
                        else{
                            $('[name=a]').val($('[name=a]').val() + v)
                        }
                    }
                    $('#result').val($('[name=a]').val() + $('[name=cal]').val() + $('[name=b]').val())
            }) 
        })
    </script>
</body>
</html>