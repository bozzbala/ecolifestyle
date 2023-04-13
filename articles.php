<?php
    if(!isset($_GET['id'])){
       ?>
<script>
    alert("Неправильный адрес страницы 404");
    location.href = "/";
</script>
<?php
    }
    include_once 'connection.php';
    $id = $_GET['id'];
    $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `articles` WHERE id='$id'"));
function str_split_by_space($str)
{
    $result = array();
    $new_str = "";
    for ($i = 0; $i < strlen($str)-1; $i++) {
        $new_str .= $str[$i];
        if($str[$i + 1] == ' ') {
            array_push($result, trim($new_str));
            $new_str = "";
        }
    }
    return $result;
}
$image = str_split_by_space($result['image_url']);
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php $result['title']?></title>
</head>
<body>
<header>
    <div class="logo">
        <a href="/"><img src="img/logo.png" alt="Логотип"></a>
    </div>
    <div>
        <img src="img/logo-small.png" alt="Логотип" id="logo-small">
    </div>
    <nav>
        <ul>
            <li><a href="#news">НОВОСТИ</a></li>
            <li><a href="#tech">ТЕХНОЛОГИИ</a></li>
            <li><a href="#recycle">ПЕРЕРАБОТКА ОТХОДОВ</a></li>
            <li><a href="#ecolifestyle">ЭКО ЖИЗНЬ</a></li>
            <li><a href="#feedback" id="feedback-header">ОБРАТНАЯ СВЯЗЬ</a></li>
        </ul>
    </nav>
    <div class="login">
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            echo '<a href="profile/index.php" class="login-btn">' . $_SESSION['username'] . '</a>';
        } else {
            echo '<a href="login/loginPage.php" class="login-btn">Войти</a>';
        }
        ?>
    </div>

    <div class="login-mobile">
        <a href="#"><i class="fa-solid fa-right-to-bracket"></i></a>
    </div>

    <div class="sidebar-open" onclick="sidebarToggle()"><i class="fa-solid fa-bars-staggered"></i></div>
    <div id="sidebar">
        <div class="sidebar-close" onclick="sidebarToggle()"><i class="fas fa-times"></i></div>
        <div class="sidebar-items">
            <div class="sidebar-item"><a href="#news">НОВОСТИ</a></div>
            <div class="sidebar-item"><a href="#tech">ТЕХНОЛОГИИ</a></div>
            <div class="sidebar-item"><a href="#recycle">ПЕРЕРАБОТКА ОТХОДОВ</a></div>
            <div class="sidebar-item"><a href="#ecolifestyle">ЭКО ЖИЗНЬ</a></div>
            <div class="sidebar-item"><a href="#feedback">ОБРАТНАЯ СВЯЗЬ</a></div>
            <div class="login">
                <?php
                session_start();
                if (isset($_SESSION['username'])) {
                    echo '<a href="profile/index.php" class="login-btn">' . $_SESSION['username'] . '</a>';
                } else {
                    echo '<a href="login/loginPage.php" class="login-btn">Войти</a>';
                }
                ?>
            </div>
        </div>
        <div class="sidebar-social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</header>
<main>
    <div class="arti">
        <div class="arti__text">
            <h1><?php echo $result['title'] ?></h1>
            <p><?php echo $result['text'] ?></p>
        </div>
        <div class="arti__img">
            <?php
                for ($i = 0; $i < count($image); $i++) {
                    ?>
                    <img src="<?php echo "./db/" . $image[$i]; ?>">
                <?php }?>
        </div>
    </div>
</main>
</body>
</html>