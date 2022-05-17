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
            <th>Tên</th>
            <th>Tác giả</th>
            <th>Giá</th>
            <th>Nhà Xuất Bản</th>
        </thead>
        <?php
        $books = [];
        $name = ['Conan', 'Doraemon', 'Onepiece', 'Psyren', 'Naruto'];
        $author = ['Bach Tran', 'Tran Bach', 'Bach Dep Trai', 'Bach nhung o index khac'];
        $publisher = ['Nhat Ban', 'Japan'];
        for($i=0; $i<10; $i++){
            $item = [
                'name' => $name[rand(0, count($name)-1)],
                'author' => $author[rand(0, count($author)-1)],
                'price' => rand(50000, 100000),
                'publisher' => $publisher[rand(0, count($publisher)-1)]
            ];
            $books[] = $item;
        }
        foreach($books as $item => $property){
            echo '<tr>';
            foreach($property as $value){
                echo "<td>$value</td>";
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>