<?php include('moder_menu.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/images/Герб_БГИТУ.png" />
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/table.css">
</head>

<body>
    <div class="limiter">
        <div class="container-create100">
            <div class="wrap-create100">
                <form class="create100-form validate-form" action="m_create_room_check.php" method="POST">
                    <span class="create100-form-title p-b-48">
                        Помещение
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Выберите подразделение">
                        <span class="input100" data-placeholder="Подразделение">
                            <div class="form-group">
                                <div class="select-wrapper">
                                    <select name="id_subdivisions">
                                        <option value="" disabled selected>Выберите подразделение</option>
                                        <?php
                                            include ('../functions/connect.php');

                                            $sql_select = "SELECT id_subdivisions, name_subdivisions FROM subdivisions";
                                            $result_select = mysqli_query($link, $sql_select);
                                            
                                            while ($row = mysqli_fetch_array($result_select))
                                            {
                                                echo "<option value = ' ".$row['id_subdivisions']." '>".$row['name_subdivisions']."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Введите номер помещения">
                        <input class="input100" type="text" name="number_room">
                        <span class="focus-input100" data-placeholder="Номер помещения"><b class="valid">*</b></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Введите назначение помещения">
                        <input class="input100" type="text" name="description_room">
                        <span class="focus-input100" data-placeholder="Назначение помещения"></span>
                    </div>

                    <div class="container-create100-form-btn">
                        <div class="wrap-create100-form-btn">
                            <div class="create100-form-bgbtn"></div>

                            <button class="create100-form-btn">
                                Добавить
                            </button>
                        </div>
                    </div>

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