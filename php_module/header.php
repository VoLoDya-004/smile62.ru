<div>
<span>
<header>
	<div class="header">
		<div class="magazin"><img src="./images/icons/magazin.png" alt="картинка">
		</div>
		<div class="poisk">
			<input id="a1" type="search" placeholder="Найти">
			<button id="a2">поиск</button>
		</div>
		<div class="menu">
	    	<div class="menu_item">
			<?php
				$test = "Главная";
				echo '<a href="/" class="block">'.$test.'</a>'
			?>
			</div>
  	    	<div class="menu_item">
				<a href="isbranoe.php" class="block">Избранное</a>
			</div>
			<div class="menu_item">
  	    			<a href="profil.php" class="block">Профиль</a>
			</div>
  	    		<div class="menu_item">
  	    			<a href="korzina.php" class="block">Корзина<span class="circle" id="circle_1">0</span></a>
			</div>
	   	</div>
	 </div>
	</header>
</span>
</div>;