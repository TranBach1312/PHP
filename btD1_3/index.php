<?php
require_once('./db/config.php');
require_once('./db/dbhelper.php');
require_once('./utils/utility.php');
$id_now = $id_next = $id_pre = '';
    if(!empty($_GET) and isset($_GET['id_now'])){
        $id_now = $_GET['id_now'];
    }
    else{
        $id_now = 1;
    }

    $limit_content = 10;

        
    $search = getGet('search');
    $sql_search = "Select * from users where fullname like '%$search%'";
    $dataList = executeResult($sql_search, false);
    

    $id_next = $id_now + 1;
    $id_pre = $id_now - 1;

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
    <button><a href="add.php">Add</a></button>
    <form action="" method="GET">
        <input type="text" name="search" value="">
        <button>Search</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>FullName</th>
                <th>Email</th>
                <th>PhoneNumber</th>
                <th></th>
                <th></th>
            </tr>
        </thead>


        <tbody>
            <?php
            foreach ($dataList as $data) {
                echo '    
                        <tr>
                            <td>' . $data['id'] . '</td>
                            <td>' . $data['fullname'] . '</td>
                            <td>' . $data['email'] . '</td>
                            <td>' . $data['phone_number'] . '</td>
                            <td><button><a href="edit.php/?id=' . $data['id'] . '">EDIT</a></button></td>
                            <td><button><a href="delete.php/?id=' . $data['id'] . '">DELETE</a></button></td>
                        </tr>
                    ';
            }
            ?>
        </tbody>
    </table>
        <button onclick="prePage(<?=$id_pre?>, <?=$search?>)">Pre</button>
        <button onclick="nextPage(<?=$id_next?>, <?=$search?>)">Next</button>

<script>
    function prePage(id, search){
        window.open("?id_now=" + id , '_self')
    }
    function nextPage(id, search){
        window.open("?id_now=" + id, '_self')
    }
</script>
</body>

</html>