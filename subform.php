<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sitehack";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$name = mysqli_real_escape_string($conn, $_POST['resource']);
$email = mysqli_real_escape_string($conn, $_POST['resource']);
$phoneNumber = mysqli_real_escape_string($conn, $_POST['resource']);
$theme = mysqli_real_escape_string($conn, $_POST['resource']);
$message = mysqli_real_escape_string($conn, $_POST['resource']);

// Выполнение запроса на добавление данных
$sql = "INSERT INTO sitehack (name, email, phoneNumber, theme, message)
VALUES ('$name', '$email', '$phoneNumber', '$theme', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Данные успешно добавлены";
  header("location: index.php");
} else {
  echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
