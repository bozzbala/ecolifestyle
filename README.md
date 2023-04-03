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
большая часть реализована без бд, для облегчения читабельности
полную версию со поделюченной бд для всего сайта покажу в финале
а это ДЕМО сайт, не забывайте!!!!!
