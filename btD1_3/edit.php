<?php
    require_once('./db/config.php');
    require_once('./db/dbhelper.php');
    require_once('./utils/utility.php');
    $fullname = $email = $phone_number = $id = "";
    if(!empty($_GET)){
        
        $id = getGet('id');
    }
    if(!empty($_POST)){
        $fullname = getPost('fullname');
        $email = getPost('email');
        $phone_number = getPost('phonenumber');
        $sql = "UPDATE `users` SET fullname = '$fullname', email = '$email', phone_number = '$phone_number' where id = '$id' ";
        execute($sql);
        header("Location: http://localhost/c2110i/btD1_3/index.php");
        die();
    }

    $sql = "SELECT * from `users` where id = '$id'";
    $dataResult = executeResult($sql, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <div class="row">
            <label for="">Fullname</label>
            <input type="text" name="fullname" value="<?=$dataResult['fullname']?>">
        </div>
        <div class="row">
            <label for="">Email</label>
            <input type="text" name="email" value="<?=$dataResult['email']?>">
        </div>
        <div class="row">
            <label for="">Phone Number</label>
            <input type="text" name="phonenumber" value="<?=$dataResult['phone_number']?>">
        </div>
        <div class="row">
            <button>Save</button>
        </div>
    </form>
</body>
</html>