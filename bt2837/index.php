<?php
    $n = rand(3, 15);
    $bookList = [];
    for($i = 0; $i < $n; $i++){
        $item = [
            'title' => 'Quyen sach ' . $i,
            'thumbnail' => 'https://viettamduc.com/wp-content/uploads/2019/01/bia-sach-hoc-vien-thiet-ke-viettamduc02.jpg',
            'price' => rand(100000, 200000)
        ];
        $bookList[] = $item;
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
    <table>
        <thead>
            <tr>
                <th>Bìa sách</th>
                <th>Tên sách</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($bookList as $item){
                    echo '<tr>
                    <td><img src="'.$item['thumbnail'].'" alt="thumbnail"></td>
                    <td>'.$item['title'].'</td>
                    <td>'.$item['price'].'</td>
                </tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>