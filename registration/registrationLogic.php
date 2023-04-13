<?php
session_start();
// Подключаемся к базе данных MySQL
include '../connection.php';

// Обработка данных формы
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // Проверка наличия пользователя с таким же именем
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
   
    if(mysqli_num_rows($result) > 0){
        echo "Пользователь с таким именем уже существует.";
    } else {
        // Добавление пользователя в базу данных
        $sql = "INSERT INTO users (`username`, `email`, `password`) VALUES ('$username', '$email', '$hashed_password')";
        if(mysqli_query($conn, $sql)){
            echo "Вы успешно зарегистрировались.";
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            // Запоминаем имя пользователя в сессии
            header("Location: ../index.php");
        } else {
            echo "Ошибка: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>