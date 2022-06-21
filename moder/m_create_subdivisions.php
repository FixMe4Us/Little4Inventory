<?php include('moder_menu.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Создание </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/table.css">
</head>

<body>

    <div class="limiter">
        <div class="container-create100">
            <div class="wrap-create100">
                <form class="create100-form validate-form" action="m_create_subdivisions_check.php" method="POST">
                    <span class="create100-form-title p-b-48">
                        Подразделение
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Название подразделения">
                        <input class="input100" type="text" name="name_subdivisions">
                        <span class="focus-input100" data-placeholder="Название подразделения"><b class="valid">*</b></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Адрес подразделения">
                        <input class="input100" type="text" name="address_room">
                        <span class="focus-input100" data-placeholder="Адрес подразделения"></span>
                    </div>

                    <div class="container-create100-form-btn">
                        <div class="wrap-create100-form-btn">
                            <div class="create100-form-bgbtn"></div>
                            <button class="create100-form-btn">
                                Добавить
                            </button>
                        </div>
                    </div>
                </form>
                <form class="create100-form validate-form" action="" method="POST">
                    <div class="text-center p-t-50">
                        <span class="txt1">
                            <b class="valid">*</b> Обязательное заполнение
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/create.js"></script>
</body>

</html>