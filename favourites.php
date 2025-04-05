<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"> 
	<meta http-equiv"X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Продажа одежды">
	<meta name="keywords" content="Продажа, одежда">
	<link rel="stylesheet" href="stylesheets_css/styles.css">
	<link rel="icon" href="../images/icons/ico.png" type="image/png">
	<title> Smile </title>
</head>
<script src="./javascripts/circle.js"></script>
<script src="./javascripts/line.js"></script>
<script src="./javascripts/progressBar.js"></script>
<script src="./javascripts/backToTop.js"></script>
<body>
	<?php
		include './php_module/header.php';
	?>
	<div id="progressBar"></div>
		<div id="content">Избранное</div>
		<div class="menu-mobile">
		<a href="/" style="display:block;">
		<div class="menu-mobile__item">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="pc-none" class="menu-mobile__item_active"><path  d="m19.463 8.858-.002-.002L11.302.54A1.829 1.829 0 0 0 10 0a1.83 1.83 0 0 0-1.302.54L.543 8.851l-.008.008a1.843 1.843 0 0 0 .003 2.6 1.83 1.83 0 0 0 1.279.54h.325v5.845c0 1.188.967 2.155 2.155 2.155H7.49a.586.586 0 0 0 .586-.586v-4.707c0-.542.442-.983.984-.983h1.883c.542 0 .983.44.983.983v4.707c0 .324.262.586.586.586h3.192a2.157 2.157 0 0 0 2.155-2.155V12h.302a1.83 1.83 0 0 0 1.302-.54 1.844 1.844 0 0 0 0-2.602Z"/></svg>
			</div>
		</a>
		<a href="favourites.php" style="display:block;">
			<div class="menu-mobile__item">
				<svg xmlns="http://www.w3.org/2000/svg" width="21" height="19" class="pc-none" class="menu-mobile__item_active"><path d="M6.225 0C2.755 0 0 2.639 0 6.082c0 2.149 1.37 4.31 3.145 6.34 1.81 2.07 4.238 4.215 6.703 6.336a1 1 0 0 0 1.304 0c2.465-2.12 4.893-4.266 6.703-6.336C19.631 10.392 21 8.23 21 6.082 21 2.639 18.246 0 14.775 0c-1.549 0-3.09.572-4.275 1.55A6.801 6.801 0 0 0 6.225 0Z" clip-rule="evenodd"/></svg>
			</div>
		</a>
		<a href="profile.php" style="display:block;">
			<div class="menu-mobile__item">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="pc-none" class="menu-mobile__item_active"><path d="M14.759 4.789c0 2.77-2.195 4.918-4.753 4.918-2.558 0-4.752-2.148-4.752-4.895C5.241 2.101 7.461 0 10.006 0a4.763 4.763 0 0 1 4.753 4.789ZM0 18.498C0 19.484.677 20 2.57 20h14.86c1.893 0 2.57-.516 2.57-1.502 0-2.864-3.85-6.808-9.994-6.808C3.85 11.69 0 15.634 0 18.498Z" clip-rule="evenodd"/></svg>
			</div>
		</a>
		<a href="basket.php" style="display:block;">
			<div class="menu-mobile__item">
				<svg width="17" height="16" xmlns="http://www.w3.org/2000/svg" class="pc-none" class="menu-mobile__item_active"><path d="M2.925.488a.833.833 0 0 0-1.517.691l4.295 9.416v.001c.005.008.023.05.046.09a.9.9 0 0 0 .979.446c.045-.01.089-.023.098-.026l6.22-1.853.105-.031c.44-.13.867-.256 1.201-.523.29-.232.517-.535.657-.88.16-.396.159-.842.158-1.3V4.105c0-.01 0-.06-.004-.11a.901.901 0 0 0-.488-.73.9.9 0 0 0-.447-.098H4.147L2.925.487ZM11.833 12a1.333 1.333 0 0 0 0 2.667h.007a1.333 1.333 0 0 0 0-2.667h-.007ZM3.167 13.334c0-.737.597-1.334 1.333-1.334h.007a1.333 1.333 0 0 1 0 2.667H4.5a1.333 1.333 0 0 1-1.333-1.333Z"/></svg>
			</div>
		</a>
		</div>

	<?php
		include './php_module/footer.php';
	?>
	<button id="scrollToTopBtn" onclick="scrollToTop()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="#fff" fill-rule="evenodd" d="M12 20.5a1 1 0 0 0 1-1V6.414l4.293 4.293a1 1 0 0 0 1.414-1.414l-6-6a1 1 0 0 0-1.414 0l-6 6a1 1 0 0 0 1.414 1.414L11 6.414V19.5a1 1 0 0 0 1 1Z" clip-rule="evenodd"/></svg></button>
</body>
</html>