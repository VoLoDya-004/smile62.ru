<?php 
require_once "../auth/auth.php";
?>
<!DOCTYPE html>
<html lang="ru"> <!--уточнить-->
<head>
	<meta charset="UTF-8"> 
	<meta http-equiv"X-UA-Compatible" content="IE=edge"> <!--уточнить-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--уточнить-->
	<meta name="description" content="Smile это современный интернет-магазин для приобритения современной техники">
	<meta name="keywords" content="Продажа, техника, Smile">
	<link rel="stylesheet" href="stylesheets/style.css">
	<link rel="icon" href="../images/icons/ico.png" type="image/png">
	<title> Smile </title>
</head>
<body> 
	<script src="./javascripts/circle.js"></script>
	<script src="./javascripts/liniya.js"></script>
	<script src="./javascripts/progressBar.js"></script>
	<script src="./javascripts/backToTop.js"></script>
	<script src="./javascripts/smena_tema.js"></script>
													<!--шапка-->
	<?php
		include './php_module/header.php';
	?>
	<div class="progress-bar" id="progressBar"></div>
													<!--основной контент-->
<div class="content">
		<h1 class="podzagolovok">Каталог</h1>
		<hr class="hr-line">
<span class="tovar">Товары</span>

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
															//карточки///
	echo '<div id= "katalog" class="setka">';
while ($row=mysqli_fetch_array($result))
	{
		echo '
			<div id="id_'.$row["id"].'" class="card">
				<div class="card_top">
					<a href="" class="card_image">
						<img src="'.$row["image"].'" alt="картинка">
					</a>';
					$sale = round(100*(($row["price"]-$row["price_sale"])/$row["price"])); 
					if ($sale!=0) {echo '<div class="card_label">-'.$sale.'%</div>';}
				echo '</div>
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
	<button id="scrollToTopBtn" onclick="scrollToTop()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="#fff" fill-rule="evenodd" d="M12 20.5a1 1 0 0 0 1-1V6.414l4.293 4.293a1 1 0 0 0 1.414-1.414l-6-6a1 1 0 0 0-1.414 0l-6 6a1 1 0 0 0 1.414 1.414L11 6.414V19.5a1 1 0 0 0 1 1Z" clip-rule="evenodd"/></svg></button>
</body>
</html>