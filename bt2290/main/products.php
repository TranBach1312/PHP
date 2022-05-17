<?php
	require_once('../db/config.php');
	require_once('../db/dbhelper.php');
	require_once('../utils/utility.php');
	session_start();
	$connect = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	$sql = "SELECT * FROM products";
	$productsList = executeResult($sql, false);
	if($productsList == null){
		for($i=0; $i<24;$i++){
			$sql = "INSERT INTO products (title, thumbnail, content, create_date, update_date)
			VALUES ('Móc diệt thuỷ quái .$i.', 'https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/bltaf02a9ed2a06c61d/5fa1f06f6178a9645452d2d4/4636_Mage_T4_NightHarvester.png?disposition=inline', 'Sát thương một tướng sẽ gây thêm (sát thương phép tương đương 125 +15% Sức mạnh Phép thuật) và cho bản thân 25% Tốc độ Di chuyển trong 1.5 giây (hồi lại sau 40 giây trên mỗi tướng).', '2021/13/12', '2022/04/12')";
			execute($sql);
		}
	}
	$sql = "SELECT * FROM products";
	$productsList = executeResult($sql, false);
	if(!isset($_SESSION['cartList'])){
		$_SESSION['cartList'] = [];
	}
	if(isset($_GET['cart'])){
		$cart = $_GET['cart'];
		$isFind = false;
		for ($i=1; $i <= count($_SESSION['cartList']) ; $i++) { 
			if($_SESSION['cartList'][$i]['product_id'] == $cart){
				$isFind = true;
				$_SESSION['cartList'][$i]['num']++;
				break;
			}
		}

		if(!$isFind){
			$item = $productsList[$cart];
			$item['num'] = 1;
			$_SESSION['cartList'][] = $item;
	}
	}

	
	$cartList = [];

	$cartList = $_SESSION['cartList'];

	mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/36fca0a55a.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="category">
			
			<?php
				foreach ($productsList as $product) {
					echo '
					<div class="product-box">
				<img src="'.$product['thumbnail'].'" alt="Thumb">
				<div class="info">
					<h3>'.$product['title'].'</h3>
					<p>'.$product['content'].'</p>
				</div>
				<button onclick="addCart('.$product['product_id'].')"><i class="fa-solid fa-cart-arrow-down"></i></button>
			</div>
			';
				}


			foreach ($cartList as $item ) {
				echo $item['title'];
			}
			?>
		</div>
	</div>

	<script>
		function addCart(id){
			window.open('?cart' +id,'self')
		}
	</script>
</body>
</html>