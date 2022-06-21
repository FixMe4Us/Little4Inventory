<?php
    $exit = $_POST['exit'];
    if (!empty($exit)) {
        unset ($_SESSION['login']);
        unset ($_SESSION['pass']);
        exit("<html><head><title>Загрузка...</title><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="/images/Герб_БГИТУ.png"/>
	<link rel="stylesheet" type="text/css" href="/css/menu.css">
	<title>Инженер</title>
</head>

<body>
	<div class="overlay"></div>
	<header class="header">
		<div class="container header__container">
			<span href="" class="logo">
				<img src="/images/menu_logo.png" alt="Logo">
			</span>
			<nav class="nav header__nav">
				<ul class="nav__list">
					<li class="nav__item"><a href="e_search_applications.php" class="nav__link">Заявки</a></li>
                    <li class="nav__item"><a href="e_view_mobile_app.php" class="nav__link">Мобильное приложение</a></li>
					<li class="nav__item"><a href="/index.php" class="nav__link">Выход</a></li>
				</ul>
			</nav>
			<button class="burger" aria-label="Открыть меню">
				<span></span>
			</button>
		</div>
	</header>
	<script defer src="/js/script.js"></script>
</body>

</html>