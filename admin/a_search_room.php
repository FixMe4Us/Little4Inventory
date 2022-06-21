<?php
    include('admin_menu.php');
    include ('../functions/connect.php');

    if (isset($_GET['del_id'])) {
        $sql_delete = "DELETE FROM room WHERE
            id_room = {$_GET['del_id']}";
        $result_delete = mysqli_query ($link, $sql_delete);
        if (!$result_delete) {
            echo '<div class="text-center p-t-50"><span class="text1"> 
                Произошла ошибка! Возможно это помещение занесено в заявках или к нему привязано оборудование. 
            </span></div>';
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
            <div class="wrap-input100 validate-input" data-validate="">
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
            $res = mysqli_query($link, "SELECT COUNT(*) FROM `room`");
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

            echo "<a href=a_search_room.php?page=". minus($page) ."> « </a>";
            // Формируем пагинацию
            for ($i = 1; $i <= $str_pag; $i++) {
                echo "<a href=a_search_room.php?page=".$i."> ". active($page, $i) ." </a>";
            }
            echo "<a href=a_search_room.php?page=". plus($page, $str_pag) ."> » </a>";
            // Запрос и вывод записей
            $result = mysqli_query($link, "SELECT room.id_room, subdivisions.name_subdivisions, room.number_room, 
                room.description_room FROM `room` INNER JOIN subdivisions 
                    ON room.id_subdivisions = subdivisions.id_subdivisions LIMIT $art, $kol"); 
        }
        else {
            $result = mysqli_query($link, "SELECT room.id_room, subdivisions.name_subdivisions, room.number_room, 
                room.description_room FROM `room` INNER JOIN subdivisions 
                    ON room.id_subdivisions = subdivisions.id_subdivisions");
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
						<th>Код помещения</th>
						<th>Название подразделения</th>
                        <th>Номер помещения</th>
                        <th>Назначение помещения</th>
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
                                        "<td> {$row['id_room']} </td>" .
                                        "<td> {$row['name_subdivisions']} </td>" .
                                        "<td> {$row['number_room']} </td>" .
                                        "<td> {$row['description_room']} </td>" .
                                        "<td><a href='?del_id={$row['id_room']}'><img src='/images/del.png' alt='Delete'></a></td>" .
                                        "<td><a href='a_update_room.php?red_id={$row['id_room']}'><img src='/images/change.png' alt='Change'></a></td>" . 
                                    '</tr>';
                                    $count++;
                                }

                    }
                    else {
                        $sqllike = "SELECT room.id_room, subdivisions.name_subdivisions, room.number_room, 
                        room.description_room FROM `room` INNER JOIN subdivisions 
                            ON room.id_subdivisions = subdivisions.id_subdivisions 
                            WHERE id_room LIKE '%$poisk%' OR name_subdivisions LIKE '%$poisk%' 
                                OR number_room LIKE '%$poisk%' OR description_room LIKE '%$poisk%'";
                        $res = mysqli_query($link, $sqllike);
                        
                            while ($row1 = mysqli_fetch_array($res)) {
                                echo '<tr>' .
                                        "<td> $count </td>" .
                                        "<td> {$row1['id_room']} </td>" .
                                        "<td> {$row1['name_subdivisions']} </td>" .
                                        "<td> {$row1['number_room']} </td>" .
                                        "<td> {$row1['description_room']} </td>" .
                                        "<td><a href='?del_id={$row1['id_room']}'><img src='/images/del.png' alt='Delete'></a></td>" .
                                        "<td><a href='a_update_id_room.php?red_id={$row1['id_room']}'><img src='/images/change.png' alt='Change'></a></td>" . 
                                    '</tr>';
                            }
                    }
                    ?>
				</tbody>
			</table>
		</div>
        <form class="create100-form validate-form" action="a_create_room.php" method="POST">
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
