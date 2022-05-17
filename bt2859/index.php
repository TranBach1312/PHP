<?php
$productList = [
    "anya" => [
        "id" => "anya",
        "name" => "Anya - Spy x Family",
        "price" => 5000000,
        "thumbnail" => "img\spy-x-family\anya.jpg"
    ],
    "loid" => [
        "id" => "loid",
        "name" => "Loid - Spy x Family",
        "price" => 4900000,
        "thumbnail" => "img\spy-x-family\loid.jpg"
    ],
    "yor" => [
        "id" => "yor",
        "name" => "Yor - Spy x Family",
        "price" => 4900000,
        "thumbnail" => "img\spy-x-family\yor.jpg"
    ],
    "forger-family" => [
        "id" => "forger-family",
        "name" => "Forger Family - Spy x Family",
        "price" => 5000000,
        "thumbnail" => "img\spy-x-family/family.jpg"
    ],
    "tanjiro" => [
        "id" => "tanjiro",
        "name" => "Tanjiro - Kimetsu no Yaiba",
        "price" => 4900000,
        "thumbnail" => "img\kimetsu-no-yaiba/tanjiro.jpg"
    ],
    "nezuko" => [
        "id" => "nezuko",
        "name" => "Nezuko - Kimetsu no Yaiba",
        "price" => 5000000,
        "thumbnail" => "img\kimetsu-no-yaiba/nezuko.jpg"
    ],
    "zenitsu" => [
        "id" => "zenitsu",
        "name" => "Zenitsu - Kimetsu no Yaiba",
        "price" => 4800000,
        "thumbnail" => "img\kimetsu-no-yaiba\zenitsu.jpg"
    ],
    "inosuke" => [
        "id" => "inosuke",
        "name" => "Inosuke - Kimetsu no Yaiba",
        "price" => 4800000,
        "thumbnail" => "img\kimetsu-no-yaiba\inosuke.jpg"
    ],
    "asta" => [
        "id" => "asta",
        "name" => "Asta - Black Clover",
        "price" => 5000000,
        "thumbnail" => "img\black-clover\asta.jpg"
    ],
    "yuno" => [
        "id" => "yuno",
        "name" => "Yuno - Black Clover",
        "price" => 4900000,
        "thumbnail" => "img\black-clover\yuno.jpg"
    ],
    "noelle" => [
        "id" => "noelle",
        "name" => "Noelle - Black Clover",
        "price" => 5000000,
        "thumbnail" => "img\black-clover/noelle.jpg"
    ],
    "mimosa" => [
        "id" => "mimosa",
        "name" => "Mimosa - Black Clover",
        "price" => 5000000,
        "thumbnail" => "img\black-clover\mimosa.jpg"
    ]
]
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="order-table">
            
        </div>

        
        <div class="products">
            <?php
                foreach($productList as $items => $item){
                    echo '<div class="product-box" onclick="addCart(a)">
                    <img src="'.$item['thumbnail'].'" alt="thumbnail">
                    <div class="info">
                        <p>Name: '.$item['name'].'</p>
                        <p>Price: '.$item['price'].'</p>
                    </div>
                </div>';

                }
            ?>
        </div>
    </div>

    <script>
        function addCart(id){
            console.log('id: ' + id)
            // window.open('?cart=' + id, '_self');
        }
    </script>
</body>

</html>