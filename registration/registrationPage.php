<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="registrationPage.css">
</head>
<body>
    <form method="POST" action="registrationLogic.php">
    <div class="box">
        <div class="form">
            <h2>Регистрация</h2>
            <div class="inputBox">
                <input type="text" name="username" id="username" required="required">
                <span>Имя пользователя</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="email" name="email" id="email" required="required">
                <span>E-mail</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" id="password" required="required">
                <span>Пароль</span>
                <i></i>
            </div>
            <div class="links">
                <a href="../login/loginPage.php">Есть аккаунт?</a>
            </div>
                <input type="submit" name="submit" value="Sign up"> 
            </div>
        </div>
    </div>
</form>
</body>
</html>
