<?php
session_start();
if(!isset($_SESSION['id'])) {
    header('Location: /login/loginPage.php');
}
include '../connection.php';

// Получение данных о пользователе из базы данных
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $_SESSION['id']);
$stmt->execute();
$result = $stmt->get_result();
$row = mysqli_fetch_assoc($result);

//function str_split_by_space($str)
//{
//    $result = array();
//    $new_str = "";
//    for ($i = 0; $i < strlen($str)-1; $i++) {
//        $new_str .= $str[$i];
//        if($str[$i + 1] == ' ') {
//            array_push($result, trim($new_str));
//            $new_str = "";
//        }
//    }
//    return $result;
//}
//
//$events_id = str_split_by_space($row['events']);

$events_id = preg_split("/[\s,]+/", $row['events']);
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
            foreach($events_id as $event) {
                $sortedEvent = mysqli_query($conn,"SELECT * FROM events WHERE id='$event'");
                $result = mysqli_fetch_assoc($sortedEvent);
                ?>
                <tr>
                    <td><?php echo $result['id'] ?></td>
                    <td><?php echo $result['title'] ?></td>
                    <td><?php echo $result['text'] ?></td>
                    <td><?php echo $result['date'] ?></td>
                    <td><?php
                        if($result['happened'] == '1'){
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
</div>
</body>
</html>