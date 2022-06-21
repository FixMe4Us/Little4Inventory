<?php
    include('moder_menu.php');
    include ('../functions/connect.php');
    $id_subdivisions = array();
    $id_room = array();
    
    $id_subdivisions = htmlentities(trim($_POST['id_subdivisions']));
    $id_room = htmlentities(trim($_POST['id_room']));
    $inventory_number = htmlentities(trim($_POST['inventory_number']));
    $fio_applicant = htmlentities(trim($_POST['fio_applicant']));
    $description_application = htmlentities(trim($_POST['description_application']));
    $date_application = date("Y-m-d");

    if (isset($id_subdivisions) &&  isset($id_room) && isset($inventory_number) && 
            isset($fio_applicant) && isset($description_application)
                && isset($date_application)) {
        $sql = "INSERT INTO applications (id_subdivisions, id_room, inventory_number, 
            fio_applicant, description_application, date_application) 
                VALUES ('$id_subdivisions', '$id_room', '$inventory_number', '$fio_applicant', 
                            '$description_application', '$date_application')";
        $result = mysqli_query($link, $sql);
        if (!$result) {
            $errorPost = "Произошла ошибка при отправке данных! Возможно есть проблемы на сервере, попробуйте снова."; 
        }
        else {
            $donePost = "Заявка успешно создана!";
        }
    }
    mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Успешно создание заявки</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
           
            <form class="create100-form validate-form" action="m_create_applications.php" method="POST">
                <div class="container-create100-form-btn">
                    <div class="wrap-create100-form-btn">
                        <button id="search-button" class="create100-form-btn">
                                Повторное добавление
                        </button>
                    </div>
                </div>
            </form>
            <form class="create100-form validate-form" action="m_search_applications.php" method="POST">
                <div class="container-create100-form-btn">
                    <div class="wrap-create100-form-btn">
                        <button id="search-button" class="create100-form-btn">
                                Поиск по заявкам
                        </button>
                    </div>
                </div>
            </form>
		</div>
    </section>
</body>

</html>




