<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sitehack";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Проверка, вошел ли пользователь в систему
session_start();


// Получение данных о пользователе из базы данных
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Обновление пароля и email
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $email = $_POST['email'];

    $errors = array();

    // Проверка, чтобы оба поля для пароля были заполнены
    if (empty($password) || empty($password_confirm)) {
        $errors[] = "Пожалуйста, заполните поля для пароля.";
    }

    // Проверка, чтобы пароли совпадали
    if ($password != $password_confirm) {
        $errors[] = "Введенные пароли не совпадают.";
    }

    // Проверка на правильный формат email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Неправильный формат email.";
    }

    // Если нет ошибок, обновляем пароль и email в базе данных
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET password = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssi", $hashed_password, $email, $user_id);
        $stmt->execute();

        // Обновление данных о пользователе в $_SESSION
        $_SESSION['email'] = $email;

        $success = "Пароль и email обновлены успешно.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Профиль пользователя</title>
    <link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
    <div class="profile-container">
        <h1>Профиль пользователя</h1>
        <?php if (isset($success)) { ?>
            <div class="success"><?php echo $success; ?></div>
        <?php } ?>
        <h2>Информация о пользователе</h2>
        <p><strong>Имя пользователя:</strong> <?php echo $row['username']; ?></p>
        <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
        <h2>Изменение пароля и email</h2>
        <?php if (!empty($errors)) { ?>
            <div class="errors">
                <?php foreach ($errors as $error) {
                    echo "<div>" . $error . "</div>";
                } ?>
            </div>
        <?php } ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>Новый пароль:</label>
            <input type="password" name="password" placeholder="Введите новый пароль">
            <label>Подтвердите новый пароль:</label>
            <input type="password" name="confirm_password" placeholder="Подтвердите новый пароль">
            <label>Новый email:</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>">
            <input type="submit" name="submit" value="Сохранить">
        </form>
        <a href="logout.php" class="logout-btn">Выйти из аккаунта</a>
    </div>
</body>
</html>