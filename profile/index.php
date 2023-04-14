<?php
// Подключение к базе данных
include '../connection.php';


// Проверка, вошел ли пользователь в систему
session_start();
if(!isset($_SESSION['id'])){
    header('Location: /login/loginPage.php');
}

if(!$_SESSION['admin']){
    header('Location: /profile/profile.php');
}


// Получение данных о пользователе из базы данных
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $_SESSION['id']);
$stmt->execute();
$result = $stmt->get_result();
$row = mysqli_fetch_assoc($result);

$events = mysqli_query($conn,"SELECT * FROM events");

$articles = mysqli_query($conn,"SELECT * FROM articles");

$events_prev = mysqli_query($conn, "SELECT * FROM events WHERE happened='1'");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Профиль пользователя</title>
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="profile-container">
    <nav class="d-flex mb-5">
        <div class="menu"><a href="#list">Таблица</a></div>
        <div class="menu mx-3"><a href="#add">Добавить новые данные</a></div>
        <div><a href="logout.php" class="logout-btn">Выйти из аккаунта</a></div>
    </nav>


    <div class="profile mb-5">
        <h1><?php echo $row['username'] ?></h1>
        <div class=""><?php echo $row['email'] ?></div>
    </div>

    <div class="dashboard d-flex justify-content-between">
        <div class="dashboard-item">
            <h3>Статьи</h3>
            <div class="dashboard-item__number text-info"><?php echo mysqli_num_rows($articles) ?></div>
        </div>
        <div class="dashboard-item">
            <h3>События</h3>
            <div class="dashboard-item__number text-success"><?php echo mysqli_num_rows($events) ?></div>
        </div>
        <div class="dashboard-item">
            <h3>Прошедшие события</h3>
            <div class="dashboard-item__number text-warning"><?php echo mysqli_num_rows($events_prev) ?></div>
        </div>
    </div>

    <div id="list" class="list-container mt-5">
        <div class="list">
            <h1>События</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Текст</th>
                    <th>Дата</th>
                    <th>Прошел</th>
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
                    <td><?php
                        if($event['happened'] == '1'){
                            echo 'Да';
                        }
                        else{
                            echo 'Нет';
                        }
                         ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="list">
            <h1>Статьи</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Текст</th>
                    <th>Дата</th>
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
                        <td><?php echo $article['created_at'] ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="add-container" id="add">
        <div class="add-item">
            <h3>Добавить новое событие</h3>
            <form action="/profile/addEvent.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Название</label>
                    <input type="text" name="title" placeholder="Название статьи" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Текст события</label>
                    <textarea rows="10" name="text" placeholder="Текст" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Дата и время</label>
                    <input class="form-control" type="datetime-local" name="date" multiple>
                </div>
                <input type="submit" value="Отправить">
            </form>
        </div>
        <div class="add-item">
            <h3>Добавить новую статью</h3>
            <form action="/profile/addArticle.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Название</label>
                    <input type="text" name="title" placeholder="Название статьи" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Текст статьи</label>
                    <textarea rows="10" name="text" placeholder="Текст" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="files" class="form-label">Картинки для статьи</label>
                    <input class="form-control" type="file" name="files[]" multiple>
                </div>
                <input type="submit" value="Отправить">
            </form>
        </div>
    </div>
</div>

</body>
</html>