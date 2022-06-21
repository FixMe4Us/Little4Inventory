<?php
    include('admin_menu.php');
    include ('../functions/connect.php');
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
    <div class="container-table mtb-3">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Доступ</th>
						<th>Логин</th>
						<th>Пароль</th>
                        <th>Изменить</th>
					</tr>
				</thead>
				<tbody>
                    <?php
                    $count = 1;
                    $result = mysqli_query($link, "SELECT * FROM `access`");
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>' .
                                "<td> $count </td>" .
                                "<td> {$row['access']} </td>" .
                                "<td> {$row['login']} </td>" .
                                "<td> {$row['password']} </td>" .
                                "<td><a href='a_access_update.php?red_id={$row['id_access']}'><img src='/images/change.png' alt='Change'></a></td>" .
                              '</tr>';
                            $count++;
                    }
                    ?>
				</tbody>
			</table>
		</div>
	</div>
    </div>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/create.js"></script>
</body>
</html>
