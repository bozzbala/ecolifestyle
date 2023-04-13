<?php
// Подключение к базе данных
include '../connection.php';

// Проверка, вошел ли пользователь в систему
session_start();


// Получение данных о пользователе из базы данных
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $_SESSION['id']);
$stmt->execute();
$result = $stmt->get_result();
$row = mysqli_fetch_assoc($result);

$events = mysqli_query($conn,"SELECT * FROM events");

$articles = mysqli_query($conn,"SELECT * FROM articles");

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
    <!--  <div>
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
        </div> -->
    <nav>
        <div class="menu"><a href="#list">Таблица</a></div>
        <div class="menu"><a href="#add">Добавить новые данные</a></div>
    </nav>
    <div class="profile">
        <h1><?php echo $row['username'] ?></h1>
        <div class=""><?php echo $row['email'] ?></div>
    </div>

    <div id="list" class="list-container">
        <div class="list">
            <h1>События</h1>
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Text</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($event = mysqli_fetch_assoc($events)) {
                ?>
                <tr>
                    <td><?php echo $event['id'] ?></td>
                    <td><?php echo $event['title'] ?></td>
                    <td><?php echo $event['text'] ?></td>
                    <td><?php echo $event['date'] ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="list">
            <h1>Статьи</h1>
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Text</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($article = mysqli_fetch_assoc($articles)) {
                    ?>
                    <tr>
                        <td><?php echo $article['id'] ?></td>
                        <td><?php echo $article['title'] ?></td>
                        <td><?php echo $article['text'] ?></td>
                        <td><?php echo $article['date'] ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="add-container" id="add">
        <div class="add-item">
            <form>
                <input type="text" placeholder="Название статьи">
                <br><br>
                <textarea rows="10" placeholder="Текст"></textarea>
                <br><br>
                <input type="date">
                <br><br>
                <input type="submit" value="Отправить">
            </form>
        </div>
        <div class="add-item">
            <form>
                <input type="title" placeholder="Название статьи">
                <br><br>
                <textarea rows="10" placeholder="Текст"></textarea>
                <br><br>
                <input type="submit" value="Отправить">
            </form>
        </div>
    </div>
</div>

</body>
</html>