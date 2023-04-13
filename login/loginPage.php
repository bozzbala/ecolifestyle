<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="loginPage.css">
</head>
<body>
    <form method="POST" action="loginLogic.php">
    <div class="box">
        <div class="form">
            <h2>Вход</h2>
            <div class="inputBox">
                <input type="text" name="username" required="required">
                <span>Имя пользователя</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>Пароль</span>
                <i></i>
            </div>
            <div class="links">
                <a href="../forgotPass/ForgotPage.php">Забыли пароль?</a>
                <a href="../registration/registrationPage.php">Нет аккаунта?<a>
            </div>
                <input type="submit" name="submit" value="Login"> 
            </div>
        </div>
    </div>
</form>
</body>
</html>