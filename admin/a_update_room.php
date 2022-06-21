<?php
    include('admin_menu.php');
    include ('../functions/connect.php'); 
    
    if (isset($_GET['red_id'])) {
        $sql_select = "SELECT id_subdivisions, number_room, description_room FROM `room`
            WHERE id_room = {$_GET['red_id']}";
        $result_select = mysqli_query($link, $sql_select);
        $row = mysqli_fetch_array($result_select);
    }

    if (isset($_GET['red_id'])) {
        $sql_update = "UPDATE `room` SET id_subdivisions = '{$_POST['id_subdivisions']}', 
            number_room = '{$_POST['number_room']}', 
                description_room = '{$_POST['description_room']}' 
                    WHERE id_room = {$_GET['red_id']}";
            
            $result_update = mysqli_query($link, $sql_update);
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
                        Помещение
                    </span>
                    <h1></h1>
                    <div class="wrap-input100 validate-input" data-validate="Выберите подразделение">
                        <span class="input100" data-placeholder="Подразделение">
                            <div class="form-group">
                                <div class="select-wrapper">
                                    <select name="id_subdivisions">
                                    <option selected="selected" value = "<?=isset($_GET['red_id']) ? $row['id_subdivisions'] : ''; ?>">Изменить подразделение</option>
                                        <?php
                                            include ('../functions/connect.php'); 
                                            $sql_select_sub = "SELECT id_subdivisions, name_subdivisions FROM subdivisions";
                                            $result_select_sub = mysqli_query($link, $sql_select_sub);
                                            $row_sub = mysqli_fetch_array($result_select_sub);
                                            
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
                    
                    <div class="wrap-input100 validate-input" data-validate="Номер помещения">
                        <span id="update">Номер помещения</span>
                        <input class="input100" type="text" name="number_room" 
                        value = "<?=isset($_GET['red_id']) ? $row['number_room'] : ''; ?>"> 
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Назначение помещения">
                        <span id="update">Назначение помещения</span>
                        <input class="input100" type="text" name="description_room" 
                        value = "<?=isset($_GET['red_id']) ? $row['description_room'] : ''; ?>"> 
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
                <form class="create100-form validate-form" action="a_search_room.php" method="POST">
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