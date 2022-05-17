<?php
    if(!empty($_POST)){
        if(isset($_POST['uname'])){
            $uname = $_POST['uname'];
        }
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        }
        if(isset($_POST['pwd'])){
            $pwd = $_POST['pwd'];
        }
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
</head>
<body>
<div class="container">
        <h1>
            Input default information
        </h1>
        
            <div class="row">
                <label for="uname">User Name:</label>
                <input type="text" id="uname" name="uname" value="<?=$uname?>" readonly>
            </div>
            <div class="row">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?=$email?>" readonly>
            </div>
            <div class="row">
                <label for="pwd">Password</label>
                <input type="text" id="pwd" name="pwd" value="<?=$pwd?>" readonly>
            </div>
    </div>
</body>
</html>