<?php
include '../connection.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $files = $_FILES['files'];

    $total_count = count($_FILES['files']);
    $filenames = "";
    for ($i = 0; $i < $total_count; $i++) {
        $target_dir = "../db/";
        $input_str = trim(basename($_FILES["files"]["name"][$i]));
        $str = preg_replace("/\s+/", "", $input_str);
        $target_file = $target_dir . $str;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["upload"]["tmp_name"][$i]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["files"]["tmp_name"][$i], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["files"]["name"][$i])) . " has been uploaded.";
                $filenames .= preg_replace("/\s+/", "", $str) . " ";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    // Получаем данные из формы
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $text = mysqli_real_escape_string($conn, $_POST['text']);

    // Создаем SQL-запрос для добавления товара в базу данных
    $sql = "INSERT INTO `articles` (`title`, `text`, `image_url`) 
            VALUES ('$title', '$text','$filenames')";

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