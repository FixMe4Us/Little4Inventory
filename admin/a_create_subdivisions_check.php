<?php
    include('admin_menu.php');
    include ('../functions/connect.php');
    $name_subdivisions = htmlentities(trim($_POST['name_subdivisions']));
    $address_room = htmlentities(trim($_POST['address_room']));

    if (isset($name_subdivisions) &&  isset($address_room)) {
        $sql = "INSERT INTO subdivisions (name_subdivisions, address_room) 
                VALUES ('$name_subdivisions', '$address_room')";
        $result = mysqli_query($link, $sql);
        if (!$result) {
            $errorPost = "Произошла ошибка при отправке данных! Возможно есть проблемы на сервере, попробуйте снова."; 
        }
        else {
            $donePost = "Подразделение успешно добавлено!";
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
           
            <form class="create100-form validate-form" action="a_create_subdivisions.php" method="POST">
                <div class="container-create100-form-btn">
                    <div class="wrap-create100-form-btn">
                        <button id="search-button" class="create100-form-btn">
                                Повторное добавление
                        </button>
                    </div>
                </div>
            </form>
            <form class="create100-form validate-form" action="a_search_subdivisions.php" method="POST">
                <div class="container-create100-form-btn">
                    <div class="wrap-create100-form-btn">
                        <button id="search-button" class="create100-form-btn">
                                Поиск подразделения
                        </button>
                    </div>
                </div>
            </form>
		</div>
	</section>
</body>

</html>




