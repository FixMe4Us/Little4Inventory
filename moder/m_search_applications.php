<?php
    include('moder_menu.php');
    include ('../functions/connect.php');

    if (isset($_GET['del_id'])) {
        $sql_delete = "DELETE FROM applications WHERE
            id_applications = {$_GET['del_id']}";
        $result_delete = mysqli_query ($link, $sql_delete);
        if (!$result_delete) {
            echo '<p> Произошла ошибка: ' . 
                mysqli_error($link) . '</p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/table.css">
    <script src="/js/search_show.js"></script>
</head>
<body>

<div class="container-pag">
    <span class="pag">
        <a href="#" onClick="show('search'); return false;">Поиск</a>
    </span>
</div>

<div id="search" class="container-search100">    
    <div class="wrap-search100">
        <form class="create100-form validate-form" method="POST">
            <div class="wrap-input100 validate-input" data-validate="Введите номер телефона сотрудника">
                <input class="input100" type="text" name="poisk"> 
                <span class="focus-input100" value="<?=$_POST['poisk']; ?>" data-placeholder="Поле для поиска"></span>
            </div>
            <div class="container-create100-form-btn">
                <div class="wrap-create100-form-btn">
                    <div class="create100-form-bgbtn"></div>
                        <button id="search-button" class="create100-form-btn">
                            Найти
                        </button>
                </div>
            </div>
        </form>
        </div>
        
    </div>

    <div class="container-pag">
        <span class="pag">
        <?php
        include ('../functions/connect.php');
        // Пагинация

        // Определение текущей страницы
        if(empty($poisk)) {
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            }
            else {
                $page = 1;
            }
            $kol = 10; // количество записей для вывода 
            $art = ($page * $kol) - $kol;

            // Определяем все количество записей в таблице
            $res = mysqli_query($link, "SELECT COUNT(*) FROM `applications`");
            $row = mysqli_fetch_row($res);
            $total = $row[0]; // всего записей

            // Количество страниц для пагинации
            $str_pag = ceil($total / $kol);
            function plus($page, $str_pag) {
                if($page==$str_pag) 
                    return $str_pag;
                else {
                    $count_p = $page;
                $count_p++;
                return $count_p;
                }
            }

            function minus($page) {
                if($page==1)
                    return 1;
                else {
                    $count_m = $page;
                    $count_m--;
                    return $count_m;
                }
            }

            function active($page, $i) {
                if($page==$i) {
                    $i ="<span class='pag-active'>$page</span>";
                    return $i;
                }
                else
                    return $i;
            }

            echo "<a href=m_search_applications.php?page=". minus($page) ."> « </a>";
            // Формируем пагинацию
            for ($i = 1; $i <= $str_pag; $i++) {
                echo "<a href=m_search_applications.php?page=".$i."> ". active($page, $i) ." </a>";
            }
            echo "<a href=m_search_applications.php?page=". plus($page, $str_pag) ."> » </a>";
            // Запрос и вывод записей
            $result = mysqli_query($link, "SELECT applications.id_applications, subdivisions.name_subdivisions,
                room.number_room, applications.inventory_number, applications.fio_applicant, 
                applications.description_application, applications.date_application, 
                    applications.status_application FROM applications 
                        INNER JOIN subdivisions ON applications.id_subdivisions = subdivisions.id_subdivisions 
                        INNER JOIN room ON applications.id_room = room.id_room
                            LIMIT $art, $kol");   
        }
        else {
            $result = mysqli_query($link, "SELECT applications.id_applications, subdivisions.name_subdivisions,
                room.number_room, applications.inventory_number, applications.fio_applicant, 
                    applications.description_application, applications.date_application, 
                    applications.status_application FROM applications 
                        INNER JOIN subdivisions ON applications.id_subdivisions = subdivisions.id_subdivisions 
                        INNER JOIN room ON applications.id_room = room.id_room");
        }
        ?>
        </span>
        
    </div>

    <div class="container-table mtb-3">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Код заявки</th>
						<th>Подразделение</th>
						<th>Помещение</th>
						<th>Инвентарный номер</th>
                        <th>ФИО</th>
                        <th>Описание</th>
                        <th>Дата</th>
                        <th>Статус</th>
                        <th>Удалить</th>
                        <th>Изменить</th>
					</tr>
				</thead>
				<tbody>
                    <?php
                    $poisk = htmlentities(trim($_POST['poisk']));
                    $count = 1;
                    if (empty($poisk)) {
                        while ($row = mysqli_fetch_array($result)) {
                                echo '<tr>' .
                                        "<td> $count </td>" .
                                        "<td> {$row['id_applications']} </td>" .
                                        "<td> {$row['name_subdivisions']} </td>" .
                                        "<td> {$row['number_room']} </td>" .
                                        "<td> {$row['inventory_number']} </td>" .
                                        "<td> {$row['fio_applicant']} </td>" .
                                        "<td> {$row['description_application']} </td>" .
                                        "<td> {$row['date_application']} </td>" .
                                        "<td> {$row['status_application']} </td>" .
                                        "<td><a href='?del_id={$row['id_applications']}'><img src='/images/del.png' alt='Delete'></a></td>" . 
                                        "<td><a href='m_update_applications.php?red_id={$row['id_applications']}'><img src='/images/change.png' alt='Change'></a></td>" .
                                    '</tr>';
                                    $count++;
                                }

                    }
                    else {
                        $sqllike = "SELECT applications.id_applications, subdivisions.name_subdivisions,
                        room.number_room, applications.inventory_number, applications.fio_applicant, 
                            applications.description_application, applications.date_application, 
                                applications.status_application FROM applications 
                                    INNER JOIN subdivisions ON applications.id_subdivisions = subdivisions.id_subdivisions 
                                    INNER JOIN room ON applications.id_room = room.id_room
                                    WHERE id_applications LIKE '%$poisk%' OR name_subdivisions 
                                        LIKE '%$poisk%' OR number_room LIKE '%$poisk%'  OR inventory_number 
                                        LIKE '%$poisk%' OR fio_applicant LIKE '%$poisk%'OR description_application 
                                        LIKE '%$poisk%' OR date_application LIKE '%$poisk%'  OR status_application 
                                        LIKE '%$poisk%'";
                        $res = mysqli_query($link, $sqllike);
                        
                            while ($row1 = mysqli_fetch_array($res)) {
                                echo '<tr>' .
                                        "<td> $count </td>" .
                                        "<td> {$row1['id_applications']} </td>" .
                                        "<td> {$row1['name_subdivisions']} </td>" .
                                        "<td> {$row1['number_room']} </td>" .
                                        "<td> {$row1['inventory_number']} </td>" .
                                        "<td> {$row1['fio_applicant']} </td>" .
                                        "<td> {$row1['description_application']} </td>" .
                                        "<td> {$row1['date_application']} </td>" .
                                        "<td> {$row1['status_application']} </td>" .
                                        "<td><a href='?del_id={$row1['id_applications']}'><img src='/images/del.png' alt='Delete'></a></td>" . 
                                        "<td><a href='m_update_applications.php?red_id={$row1['id_applications']}'><img src='/images/change.png' alt='Change'></a></td>" .
                                    '</tr>';
                            }
                    }
                    ?>
				</tbody>
			</table>
		</div>
        <form class="create100-form validate-form" action="m_create_applications.php" method="POST">
            <div class="container-create100-form-btn">
                <div class="wrap-create100-form-btn">
                    <div class="create100-form-bgbtn"></div>
                        <button id="search-button" class="create100-form-btn">
                            Добавить
                        </button>
                </div>
            </div>
        </form>     
	</div>
    </div>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/create.js"></script>
</body>
</html>
