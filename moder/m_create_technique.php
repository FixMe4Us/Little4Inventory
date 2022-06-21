<?php include('moder_menu.php'); ?>

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
</head>

<body>
    <div class="limiter">
        <div class="container-create100">
            <div class="wrap-create100">
                <form class="create100-form validate-form" action="m_create_technique_check.php" method="POST">
                    <span class="create100-form-title p-b-48">
                        Оборудование
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Выберите помещение">
                        <span class="input100" data-placeholder="Помещение">
                            <div class="form-group">
                                <div class="select-wrapper">
                                    <select name="id_typedevice">
                                        <option value="" disabled selected>Выберите тип</option>
                                        <?php
                                            include ('../functions/connect.php');
                                            $sql_select_type = "SELECT id_typedevice, device FROM `typedevice`";
                                            $result_select_type = mysqli_query($link, $sql_select_type);
                                
                                            while ($row_type = mysqli_fetch_array($result_select_type))
                                            {
                                                echo "<option value = ' ".$row_type['id_typedevice']." '>".$row_type['device']."</option>";  
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Введите модель">
                        <input class="input100" type="text" name="model"> 
                        <span class="focus-input100" data-placeholder="Модель"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Введите инвертарный номер">
                        <input class="input100" type="text" name="inventory_number">
                        <span class="focus-input100" data-placeholder="Инвертарный номер"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Выберите подразделение">
                        <span class="input100" data-placeholder="Подразделение">
                            <div class="form-group">
                                <div class="select-wrapper">
                                    <select name="id_subdivisions">
                                        <option value="" disabled selected>Выберите подразделение</option>
                                        <?php
                                            include ('../functions/connect.php');

                                            $sql_select_sub = "SELECT id_subdivisions, name_subdivisions FROM subdivisions";
                                            $result_select_sub = mysqli_query($link, $sql_select_sub);
                                            
                                            while ($row_sub = mysqli_fetch_array($result_select_sub))
                                            {
                                                echo "<option value = ' ".$row_sub['id_subdivisions']." '>".$row_sub['name_subdivisions']."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Выберите помещение">
                        <span class="input100" data-placeholder="Помещение">
                            <div class="form-group">
                                <div class="select-wrapper">
                                    <select name="id_room">
                                        <option value="" disabled selected>Выберите помещение</option>
                                        <?php
                                            include ('../functions/connect.php');

                                            $sql_select_room = "SELECT id_room, number_room FROM `room`";
                                            $result_select_room = mysqli_query($link, $sql_select_room);
                                            
                                            while ($row_room = mysqli_fetch_array($result_select_room))
                                            {
                                                echo "<option value = ' ".$row_room['id_room']." '>".$row_room['number_room']."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Статус">
                        <span id="update">Статус</span>
                        <input class="input100" type="text" name="status_technique" value="Исправно"> 
                        <span class="focus-input100" data-placeholder=""></span>
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
            </div>
        </div>
    </div>

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/create.js"></script>
</body>

</html>