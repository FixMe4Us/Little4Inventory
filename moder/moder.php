<?php
    $exit = $_POST['exit'];
    if (!empty($exit)) {
        unset ($_SESSION['login']);
        unset ($_SESSION['pass']);
        exit("<html><head><title>Загрузка...</title><meta http-equiv='Refresh' content='0; URL=index.php'></head></html>");
    }
    include('moder_menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/css/menus.css">
    <link rel="icon" type="image/png" href="/images/Герб_БГИТУ.png"/>
    <title></title>
</head>
<body>
    <section class="section">
		<div class="container">
			<h1>Вы успешно авторизировались!</h1>
			<p>Прежде чем добававить оборудование надо сначала добавить его тип</p>
		</div>
	</section>
</body>
</html>
