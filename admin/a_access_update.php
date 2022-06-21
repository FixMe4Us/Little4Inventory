<?php
    include('admin_menu.php');
    include ('../functions/connect.php');
    if (isset($_GET['red_id'])) {
    $sql_update = "UPDATE `access` SET `password` = '{$_POST['password']}'  
            WHERE id_access = {$_GET['red_id']}";
        
        $result_update = mysqli_query($link, $sql_update);
        }

        if (!$result_update) {
            echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
        }
       
   if (isset($_GET['red_id'])) {
        $sql_select = "SELECT `password` FROM `access`
            WHERE id_access = {$_GET['red_id']}";
        $result_select = mysqli_query($link, $sql_select);
        $row = mysqli_fetch_array($result_select);
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/table.css">
    <script src="/js/search_show.js"></script>
</head>

<body>
    <div class="limiter">
        <div class="container-create100">
            <div class="wrap-create100">
                <form class="create100-form validate-form" action="" method="POST">
                    <span class="create100-form-title p-b-48">
                        Доступ
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Введите пароль">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Пароль"></span>
					</div>
                    
                    <div class="container-create100-form-btn">
                        <div class="wrap-create100-form-btn">
                            <div class="create100-form-bgbtn"></div>
                            <button class="create100-form-btn">
                                Сохранить
                            </button>
                        </div>
                    </div>
                </form>
                <h1></h1>
                <form class="create100-form validate-form" action="a_access.php" method="POST">
                    <div class="wrap-create100-form-btn">
                        <div class="create100-form-bgbtn"></div>
                        <button class="create100-form-btn">
                            Вернуться назад
                        </button>
                        <div class="create100-form-bgbtn"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/create.js"></script>
</body>

</html>