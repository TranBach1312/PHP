<?php 
    require_once('./db/config.php');
    require_once('./db/dbhelper.php');
    require_once('./utils/utility.php');
    $fullname = $email = $phone_number = "";
    if(!empty($_POST)){
        $fullname = getPost('fullname');
        $email = getPost('email');
        $phone_number = getPost('phonenumber');
        $sql = "INSERT INTO `users` (fullname, email, phone_number)
                VALUES('$fullname', '$email', '$phone_number')";
        execute($sql);
        header('Location: index.php');
    }


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
    <form action="" method = "POST">
        <div class="row">
            <label for="">Fullname</label>
            <input type="text" name="fullname">
        </div>
        <div class="row">
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <div class="row">
            <label for="">Phone Number</label>
            <input type="text" name="phonenumber">
        </div>
        <div class="row">
            <button>Save</button>
        </div>
    </form>
</body>
</html>