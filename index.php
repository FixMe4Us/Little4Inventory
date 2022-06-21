<?php
    session_start();
    include('functions/connect.php');
    $login = stripslashes(htmlspecialchars(trim($_POST['login'])));
    $pass = trim($_POST['pass']);
    if (!empty($login) && !empty($pass)) {
        $sql = "SELECT `id_access`, `access`, `login`, `password` FROM `access` 
            where `login`='$login' and `password`='$pass'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_num_rows($result);
        if ($row == 0) {
			$errorSignUp = "<div class='text-center fs-15'>Неправильный логин или пароль!</div> <style>.authorization {color: red;}</style>";

			
        }
        else {
            $row1 = mysqli_fetch_array($result);
            if ($row1['login'] == 'admin') {
                header('Location: admin/admin.php');
            }
            if ($row1['login'] == 'moder') {
                header('Location: moder/moder.php');
            }
			if ($row1['login'] == 'engineer') {
                header('Location: engineer/e_search_applications.php');
            }
            if ($row1['login'] == 'user') {
                header('Location: user/user.php');
            }
        }
    }
    mysqli_close($link);
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Авторизация</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/Герб_БГИТУ.png" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/authorization.css">
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-48">
						Авторизация
					</span>
					<span class="login100-form-title p-b-48">
						<h3><img src="images/Герб_БГИТУ_small.png" alt="Герб_БГИТУ.png"></h3> 
					</span>

					<div class="wrap-input100 validate-input" data-validate="Введите логин">
						<input class="input100" type="text" name="login">
						<span class="focus-input100" data-placeholder="Логин"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Введите пароль">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Пароль"></span>
					</div>

					<?php
						if($row == 0) {
							echo($errorSignUp);
						}
					?>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Войти
							</button>
						</div>
					</div>

					<div class="text-center p-t-50">
						<h1><a href="https://disk.yandex.ru/d/Ld9a1XkWkax7pA"><img src="images/qr-code.png" alt="qr_code"></a></h1>
						<span class="txt1">
							Мобильное приложение для <b>android</b>
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>