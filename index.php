<?php 
require_once "auth.php";
?>
<!DOCTYPE html>
<html lang="ru"> <!--уточнить-->
<head>
	<meta charset="UTF-8"> 
	<meta http-equiv"X-UA-Compatible" content="IE=edge"> <!--уточнить-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--уточнить-->
	<meta name="description" content="Продажа одежды">
	<meta name="keywords" content="Продажа, одежда">
	<link rel="stylesheet" href="style.css"> <!--уточнить и возможно что-то добавить-->
	<title> Продажа </title>	
</head>
<body>
	<script src="./javascripts/circle.js"></script>
													<!--шапка-->
	<?php
		include './php_module/header.php';
	?>
													<!--основной контент-->
<div class="content">
		<h1 class="podzagolovok">Каталог</h1>
		<hr class="hr-line">

<?php
$query = "select * from tovar";
/* Создаем соединение */
$connect = mysqli_connect($hostname, $username, $password, $dbName);
//connect();
if (!$connect) {
    die("Ошибка подключения к БД: " . mysqli_connect_error());
}
mysqli_set_charset($connect, "utf8");
/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
mysqli_select_db($connect, $dbName) or die ("<p>Не могу создать соединение:".mysqli_error().". Ошибка в строке ".__LINE__."</p>");
$result = mysqli_query($connect, $query) or die(mysqli_error());
mysqli_close($connect);
//$count = mysqli_num_rows($result);
															//--карточки--
	echo '<div id= "katalog" class="setka">';
while ($row=mysqli_fetch_array($result))
	{
		echo '
			<div id="id_'.$row["id"].'" class="card">
				<div class="card_top">
					<a href="" class="card_image">
						<img src="'.$row["image"].'" alt="картинка">
					</a>
					<div class="card_label">-10%</div>
				</div>
				<div class="card_bottom">
					<div class="card_prices">
						<div class="card_price card_price--discount">'.$row["price"].'</div>
						<div class="card_price card_price--count">'.$row["price_sale"].'</div>
					</div>
					<a href="" class="card_title">'.$row["nazvanie"].'</a>
					<button class="card_btn" id="card_btn_1" onclick="myFunction()">В корзину</button>
				</div>
			</div>';
	}
?>
	</div>
</div>

														<!--футер-->
		
	<?php
		include './php_module/footer.php';
	?>
</body>
</html>