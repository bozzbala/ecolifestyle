# sitehackathon
вот код для бд users без него сайт не заработает
CREATE DATABASE siteHack;
USE siteHack;

CREATE TABLE users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);
CREATE TABLE sitehack (
  name VARCHAR(255),
  email VARCHAR(255),
  phoneNumber VARCHAR(20),
  theme VARCHAR(255),
  message VARCHAR(1000)
);
большая часть реализована без бд, для облегчения читабельности
полную версию со поделюченной бд для всего сайта покажу в финале
а это ДЕМО сайт, не забывайте!!!!!

еще, некоторые css подтянуты с интернета, как и шрифты, нужно подключение к интернету
