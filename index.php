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
				<div id="card_heart" class="card_heart"><svg width="23" height="21" xmlns="http://www.w3.org/2000/svg">
			<path opacity=".6" d="M12.113 19.777a.98.98 0 0 1-1.246 0C5.327 15.102.85 10.749 1.004 6.985c0-2.764 2.093-5.693 5.743-5.973 1.274-.071 3.22.194 4.741 1.542 1.55-1.352 3.65-1.632 4.735-1.537 3.216.187 5.776 2.77 5.776 5.968.082 3.87-4.32 8.125-9.886 12.792Z"/>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M7.225 3C4.805 3 3 4.796 3 7.082c0 1.36.91 3.034 2.65 5.023 1.554 1.777 3.621 3.644 5.85 5.574 2.229-1.93 4.296-3.797 5.85-5.574C19.09 10.116 20 8.443 20 7.081 20 4.796 18.194 3 15.775 3c-1.326 0-2.666.614-3.52 1.597a1 1 0 0 1-1.51 0C9.892 3.614 8.552 3 7.226 3ZM1 7.082C1 3.639 3.754 1 7.225 1c1.55 0 3.09.572 4.275 1.55A6.802 6.802 0 0 1 15.775 1C19.245 1 22 3.639 22 7.082c0 2.149-1.37 4.31-3.145 6.34-1.81 2.07-4.238 4.215-6.703 6.336a1 1 0 0 1-1.304 0c-2.465-2.12-4.892-4.266-6.703-6.336C2.369 11.392 1 9.23 1 7.082Z"/>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M12.781 20.524a1.965 1.965 0 0 1-2.563 0c-2.47-2.126-4.956-4.323-6.825-6.462C1.593 12.002 0 9.6 0 7.066 0 3.057 3.216 0 7.208 0A7.77 7.77 0 0 1 11.5 1.322 7.77 7.77 0 0 1 15.792 0C19.784 0 23 3.057 23 7.065c0 2.534-1.592 4.937-3.393 6.997-1.869 2.14-4.356 4.336-6.825 6.463ZM11.5 2.512A6.825 6.825 0 0 1 15.792.955c3.484 0 6.25 2.651 6.25 6.11 0 2.16-1.375 4.331-3.158 6.37-1.817 2.081-4.255 4.237-6.73 6.367a1.003 1.003 0 0 1-1.309 0c-2.474-2.13-4.911-4.286-6.73-6.366C2.334 11.396.959 9.225.959 7.066c0-3.46 2.765-6.111 6.25-6.111 1.555 0 3.102.574 4.292 1.557ZM7.208 3.92c-1.919 0-3.283 1.395-3.283 3.146 0 .993.696 2.442 2.425 4.421 1.369 1.566 3.162 3.222 5.15 4.96 1.988-1.738 3.781-3.394 5.15-4.96 1.73-1.979 2.425-3.428 2.425-4.42 0-1.752-1.364-3.147-3.283-3.147-1.053 0-2.134.496-2.81 1.274a1.964 1.964 0 0 1-2.964 0c-.676-.778-1.757-1.274-2.81-1.274ZM11.5 17.714c-2.237-1.94-4.313-3.816-5.873-5.601-1.746-1.999-2.66-3.68-2.66-5.048 0-2.297 1.812-4.1 4.241-4.1 1.332 0 2.677.616 3.534 1.603a1.004 1.004 0 0 0 1.515 0c.858-.987 2.203-1.604 3.535-1.604 2.429 0 4.242 1.804 4.242 4.101 0 1.368-.915 3.05-2.661 5.048-1.56 1.785-3.636 3.662-5.873 5.6Z" fill="#fff"/>
			</svg></a></div>
					<a href="" class="card_image">
						<img src="'.$row["image"].'" alt="картинка">
					</a>';
					$sale = round(100*(($row["price"]-$row["price_sale"])/$row["price"])); 
					$price = str_replace('.00', '', number_format($row["price"], 2, '.', ' '));
					$price_sale = str_replace('.00', '', number_format($row["price_sale"], 2, '.', ' '));
					if ($sale!=0) {echo '<div class="card_label">-'.$sale.'%</div>';}
					if ($price === $price_sale) {echo '</div>
				<div class="card_bottom">
						<div class="card_price card_price--count--1">'.$price.'</div>
					<a href="" class="card_title">'.$row["nazvanie"].'</a>
					<button class="card_btn" id="card_btn_1" onclick="myFunction()">В корзину</button>
				</div>
			</div>';}
			else{
				echo '</div>
				<div class="card_bottom">
					<div class="card_prices">
						<div class="card_price card_price--discount">'.$price.'</div>
						<div class="card_price card_price--count">'.$price_sale.'</div>
					</div>
					<a href="" class="card_title">'.$row["nazvanie"].'</a>
					<button class="card_btn" id="card_btn_1" onclick="myFunction()">В корзину</button>
				</div>
			</div>';
			}
		}
?>
	</div>
</div>
														<!--футер-->
														
	<?php
		include './php_module/footer.php';
	?>
	<button id="scrollToTopBtn" onclick="scrollToTop()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="#fff" fill-rule="evenodd" d="M12 20.5a1 1 0 0 0 1-1V6.414l4.293 4.293a1 1 0 0 0 1.414-1.414l-6-6a1 1 0 0 0-1.414 0l-6 6a1 1 0 0 0 1.414 1.414L11 6.414V19.5a1 1 0 0 0 1 1Z" clip-rule="evenodd"/></svg></button>
	<script src="./javascripts/liniya.js"></script>
	<script src="./javascripts/circle.js"></script>
	<script src="./javascripts/progressBar.js"></script>
	<script src="./javascripts/backToTop.js"></script>
	<script src="./javascripts/smena_tema.js"></script>
</body>
</html>