<?php
    include('user_menu.php');
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/table.css">
    <link rel="stylesheet" type="text/css" href="/css/menu.css">
    <link rel="icon" type="image/png" href="images/Герб_БГИТУ.png"/>
    <title>User</title>
</head>
<body>
    <section class="section">
		<div class="container">
			<h1>Мухин Андрей Егорович</h1>
			<p>Является инженером и постоянным ремонтником компьютерной и офисной техники университета.</p>
            <p>Номер телефона: <b>784(9403)799-25-73</b></p>
            <p>E-mail: <b>muxin_andrey@gmail.com</b></p>
            <h1></h1>
            <div style="position:relative;overflow:hidden;">
            <a href="https://yandex.ru/maps/org/fgbou_vo_bryanskiy_gosudarstvenny_inzhenerno_tekhnologicheskiy_universitet/1054202859/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">ФГБОУ ВО Брянский государственный инженерно-технологический университет</a><a href="https://yandex.ru/maps/191/bryansk/category/university_college/184106140/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">ВУЗ в Брянске</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUJ6XxakB" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
		</div>
	</section>
</body>
</html>
