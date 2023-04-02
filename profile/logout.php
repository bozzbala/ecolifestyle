<?php
// Запускаем сессию
session_start();

// Удаляем все переменные сессии
session_unset();

// Разрушаем сессию
session_destroy();

// Перенаправляем на страницу входа
header("location: ../index.php");
exit;
?>
