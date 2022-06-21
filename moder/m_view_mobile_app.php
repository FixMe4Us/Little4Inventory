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
    <link rel="icon" type="image/png" href="/images/Герб_БГИТУ.png"/>
    <title></title>
</head>
<body>
    <section class="section">
		<div class="container">
			<h1>Мобильное приложение</h1>
			<p>Приложения для <b>android</b>. Простой и удобный цифровой ежедневник. 
                Кликни на qr-код или отсканируй его.</p>
            <h1><a href="https://disk.yandex.ru/d/Ld9a1XkWkax7pA"><img src="/images/qr-code.png" alt="qr_code"></a></h1>
		</div>
	</section>
</body>
</html>
