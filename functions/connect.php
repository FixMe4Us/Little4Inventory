<?php
    $host = 'localhost';
    $user = 'u114675_admin';
    $password = '1O4h3Q6u';
    $db = 'u114675_accounting_material_values';

    $link = mysqli_connect($host, $user, $password, $db);

    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с с базой
        данных.";
        echo '<br>';
        echo "Код ошибки errno: " . mysqli_connect_errno();
        echo '<br>';
        echo "Текст ошибки error: " . mysqli_connect_error();
        exit;
    }
?>
