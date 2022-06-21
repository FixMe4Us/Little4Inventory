<?php
    include('moder_menu.php');
    include ('../functions/connect.php');
    $device = htmlentities(trim($_POST['device']));

    if (isset($device)) {
        $sql = "INSERT INTO typedevice (device) 
                VALUES ('$device')";
        $result = mysqli_query($link, $sql);
        if (!$result) {
            $errorPost = "Произошла ошибка при отправке данных! Возможно есть проблемы на сервере, попробуйте снова."; 
        }
        else {
            $donePost = "Тип оборудования успешно добавлен!";
        }
    }
    mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="/images/Герб_БГИТУ.png" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/table.css">
</head>

<body>

    <section class="section">
		<div class="container">
            <div class="text-center p-t-50">
                <h1>
                <?php
                    if (!$result) {
                        echo($errorPost);
                    }
                    else {
                        echo($donePost); 
                    }
                ?>
                </h1>
            </div>
           
            <form class="create100-form validate-form" action="m_create_typedevice.php" method="POST">
                <div class="container-create100-form-btn">
                    <div class="wrap-create100-form-btn">
                        <button id="search-button" class="create100-form-btn">
                                Повторное добавление
                        </button>
                    </div>
                </div>
            </form>
            <form class="create100-form validate-form" action="m_search_typedevice.php" method="POST">
                <div class="container-create100-form-btn">
                    <div class="wrap-create100-form-btn">
                        <button id="search-button" class="create100-form-btn">
                                Поиск оборудования
                        </button>
                    </div>
                </div>
            </form>
		</div>
    </section>
</body>

</html>




