<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="/images/Герб_БГИТУ.png" />
	<link rel="stylesheet" type="text/css" href="/css/menu.css">
	<title>Администратор</title>
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
					<li class="nav__item">
						<li class="nav__item">
							<a href="" class="nav__link nav__link--drop">Оборудование и его типы</a>
							<ul class="nav__list nav__list--dropdown dropdown-list dropdown-submenu">
								<li class="dropdown-list__item mobile-back"><a href="#"
										class="dropdown-list__link mobile-back__link"><img src="/images/return_logo.png" alt="Return.png" class="mobile-back__link"></a></li>
								<li class="dropdown-submenu__item">
									<h3 class="dropdown-submenu__title">Оборудование</h3>
									<ul class="dropdown-submenu__list">
										<li class="dropdown-submenu__list-item"><a href="a_search_technique.php">Поиск оборудования</a></li>
										<li class="dropdown-submenu__list-item"><a href="a_create_technique.php">Добавить оборудование</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu__item">
									<h3 class="dropdown-submenu__title">Тип оборудования</h3>
									<ul class="dropdown-submenu__list">
										<li class="dropdown-submenu__list-item"><a href="a_search_typedevice.php">Поиск типа оборудования</a></li>
										<li class="dropdown-submenu__list-item"><a href="a_create_typedevice.php">Добавить тип оборудования</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</li>

					<li class="nav__item">
						<a href="" class="nav__link nav__link--drop">Подразделения и помещения</a>
						<ul class="nav__list nav__list--dropdown dropdown-list dropdown-submenu">
							<li class="dropdown-list__item mobile-back"><a href="#"
									class="dropdown-list__link mobile-back__link"><img src="/images/return_logo.png" alt="Return.png" class="mobile-back__link"></a></li>
							<li class="dropdown-submenu__item">
								<h3 class="dropdown-submenu__title">Подразделения</h3>
								<ul class="dropdown-submenu__list">
									<li class="dropdown-submenu__list-item"><a href="a_search_subdivisions.php">Поиск подразделения</a></li>
									<li class="dropdown-submenu__list-item"><a href="a_create_subdivisions.php">Добавить подразделение</a></li>
								</ul>
							</li>
							<li class="dropdown-submenu__item">
								<h3 class="dropdown-submenu__title">Помещения</h3>
								<ul class="dropdown-submenu__list">
									<li class="dropdown-submenu__list-item"><a href="a_search_room.php">Поиск помещения</a></li>
									<li class="dropdown-submenu__list-item"><a href="a_create_room.php">Добавить помещение</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav__item">
						<a href="" class="nav__link nav__link--drop">Заявки</a>
						<ul class="nav__list nav__list--dropdown dropdown-list">
							<li class="dropdown-list__item mobile-back">
								<a href="" class="dropdown-list__link mobile-back__link"><img src="/images/return_logo.png" alt="Return.png" class="mobile-back__link"></a>
							</li>
							<li class="dropdown-list__item">
								<a href="a_search_applications.php" class="dropdown-list__link">Поиск по заякам</a>
							</li>
							<li class="dropdown-list__item">
								<a href="a_create_applications.php" class="dropdown-list__link">Добавить заявку</a>
							</li>
						</ul>
					</li>
					<li class="nav__item"><a href="a_access.php" class="nav__link">Доступ</a></li>

					<li class="nav__item"><a href="a_view_mobile_app.php" class="nav__link">Мобильное приложение</a></li>
					<li class="nav__item"><a href="/index.php" class="nav__link">Выход</a></li>
				</ul>
			</nav>
			<button class="burger" aria-label="Открыть меню">
				<span></span>
			</button>
		</div>
	</header>

	<script src="/js/script.js"></script>
</body>

</html>