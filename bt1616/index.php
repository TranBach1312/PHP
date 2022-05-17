<?php

    $uname = $email = $pwd = '';
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

    $userList = [];
    $item = [
        'user' => $uname,
        'email' => $email,
        'pwd' => $pwd
    ];
    $userList[] = $item;
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
        <div class="show">
            <h1>Managerment</h1>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
            
            <tbody>
                <?php
                $index = 0;
                if(!empty($userList)){
                    foreach($userList as $item){
                        echo '<tr>
                        <td>'.++$index.'</td>
                        <td>'.$item['user'].'</td>
                        <td>'.$item['email'].'</td>
                        <td>'.$item['pwd'].'</td>
                    </tr>';
                    }}
                ?>
            </tbody>
            </table>
        </div>
        <div class="form">
        <h1>
            Input default information
        </h1>
        <form action="" method="POST">
            <div class="row">
                <label for="uname">User Name:</label>
                <input type="text" id="uname" name="uname">
            </div>
            <div class="row">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="row">
                <label for="pwd">Password</label>
                <input type="password" id="pwd" name="pwd">
            </div>

            <div class="row">
                <label for=""></label>
                <button type="submit">Register</button>
            </div>
        </form>
        </div>
    </div>
</body>
</html>