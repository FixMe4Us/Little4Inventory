<?php include('admin_menu.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Создание типа оборудования</title>
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
                <form class="create100-form validate-form" action="a_create_typedevice_check.php" method="POST">
                    <span class="create100-form-title p-b-48">
                        Тип оборудования
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Тип оборудования">
                        <input class="input100" type="text" name="device">
                        <span class="focus-input100" data-placeholder="Тип оборудования"></span>
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
                <h1></h1>
            </div>
        </div>
    </div>

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/create.js"></script>
</body>

</html>