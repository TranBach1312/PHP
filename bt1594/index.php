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
        <form action="show.php" method="POST">
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
</body>
</html>