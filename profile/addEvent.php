<?php
include '../connection.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $files = $_FILES['files'];
    // Получаем данные из формы
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $text = mysqli_real_escape_string($conn, $_POST['text']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    // Создаем SQL-запрос для добавления товара в базу данных
    $sql = "INSERT INTO `events` (`title`, `text`, `date`, `happened`) 
            VALUES ('$title', '$text', '$date', 0)";

    // Выполняем запрос
    if (mysqli_query($conn, $sql)) {
        echo "Товар успешно добавлен в базу данных.";
    } else {
        echo "Ошибка: " . mysqli_error($conn);
    }

    // Закрываем соединение с базой данных
    mysqli_close($conn);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}