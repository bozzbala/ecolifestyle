<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Eco Life Style</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="slider.css">
    <link rel="stylesheet" type="text/css" href="animations.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto+Slab:wght@300&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.css">
    <script src="https://kit.fontawesome.com/012beec9f6.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./img/icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="animations/animate.min.css">
    <script src="wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</head>
<body>
<header>
    <div class="logo">
        <img src="img/logo.png" alt="Логотип">
    </div>
    <div>
        <img src="img/logo-small.png" alt="Логотип" id="logo-small">
    </div>
    <nav>
        <ul>
            <li><a href="#">НОВОСТИ</a></li>
            <li><a href="#">ТЕХНОЛОГИИ</a></li>
            <li><a href="#">ПЕРЕРАБОТКА ОТХОДОВ</a></li>
            <li><a href="#">ЭКО ЖИЗНЬ</a></li>
            <li><a href="#" id="feedback-header">ОБРАТНАЯ СВЯЗЬ</a></li>
        </ul>
    </nav>
    <div class="login">
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            echo '<a href="profile/profile.php" class="login-btn">' . $_SESSION['username'] . '</a>';
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
            <div class="sidebar-item"><a href="/">НОВОСТИ</a></div>
            <div class="sidebar-item"><a href="products.php#master">ТЕХНОЛОГИИ</a></div>
            <div class="sidebar-item"><a href="store.php">ПЕРЕРАБОТКА ОТХОДОВ</a></div>
            <div class="sidebar-item"><a href="products.php#yarns">ЭКО ЖИЗНЬ</a></div>
            <div class="sidebar-item"><a href="products.php">ОБРАТНАЯ СВЯЗЬ</a></div>
            <div class="login">
                <?php
                session_start();
                if (isset($_SESSION['username'])) {
                    echo '<a href="profile/profile.php" class="login-btn">' . $_SESSION['username'] . '</a>';
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
    <div class="hero-slider" data-carousel>
        <div class="carousel-cell" style="background-image: url(img/img-1.jpg);">
            <div class="overlay"></div>
            <div class="inner">
                <div class="cont">
                    <h2 class="subtitle text1">EcoLifestyle</h2>
                </div>
            </div>
        </div>

        <div class="carousel-cell" style="background-image: url(img/img-2.jpg);">
            <div class="overlay"></div>
            <div class="inner">
                <h3 class="subtitle">Экология</h3>
                <h2 class="title">Сохранение природы - залог жизни на планете!</h2>
                <a href="#" class="btn">подробнее</a>
            </div>
        </div>

        <div class="carousel-cell" style="background-image: url(img/img-3.jpg);">
            <div class="overlay"></div>
            <div class="inner">

                <h3 class="subtitle ">Экология</h3>
                <h2 class="title ">Природа не нуждается в нас, но мы нуждаемся в ней!</h2>

                <a href="#" class="btn">подробнее</a>
            </div>
        </div>
        <div class="hero-slider" data-carousel>
            <div class="carousel-cell" style="background-image: url(img/img-4.jpg);">
                <div class="overlay"></div>
                <div class="inner">
                    <h3 class="subtitle">Экология</h3>
                    <h2 class="title">Чистый воздух, чистая вода, чистая земля - здоровье человека!</h2>
                    <a href="#" class="btn">подробнее</a>
                </div>
            </div>
        </div>
    </div>

    <div class="section-name">
        <h1>О проекте</h1>
        <div class="section-line"></div>
    </div>

    <section class="about">

        <div class="about__box">
            <div class="about__image">
            </div>
            <div class="about__text">
                Добро пожаловать! <b>EcoLifestyle</b> покажет вам жизнь без отходов! <b>Мы</b> являемся экспертами в
                этой области и стремимся <b>помочь людям</b>, которые хотят <b>изменить</b> свои привычки и стать более
                <b>экологичными</b>.
            </div>
            <div class="about__text_mobile"><b>Мы</b> являемся экспертами в
                этой области и стремимся <b>помочь людям</b></div>
        </div>

        <div class="about__box">
            <div class="about__text_mobile"><b>Мы</b> являемся экспертами в
                этой области и стремимся <b>помочь людям</b></div>
            <div class="about__text">
                Добро пожаловать! <b>EcoLifestyle</b> покажет вам жизнь без отходов! <b>Мы</b> являемся экспертами в
                этой области и стремимся <b>помочь людям</b>, которые хотят <b>изменить</b> свои привычки и стать более
                <b>экологичными</b>.
            </div>
            <div class="about__image">
            </div>
        </div>

        <div class="about__box">
            <div class="about__image">
            </div>
            <div class="about__text">
                Добро пожаловать! <b>EcoLifestyle</b> покажет вам жизнь без отходов! <b>Мы</b> являемся экспертами в
                этой области и стремимся <b>помочь людям</b>, которые хотят <b>изменить</b> свои привычки и стать более
                <b>экологичными</b>.
            </div>
            <div class="about__text_mobile"><b>Мы</b> являемся экспертами в
                этой области и стремимся <b>помочь людям</b></div>
        </div>

        <div class="about__box">
            <div class="about__text_mobile"><b>Мы</b> являемся экспертами в
                этой области и стремимся <b>помочь людям</b></div>
            <div class="about__text">
                Добро пожаловать! <b>EcoLifestyle</b> покажет вам жизнь без отходов! <b>Мы</b> являемся экспертами в
                этой области и стремимся <b>помочь людям</b>, которые хотят <b>изменить</b> свои привычки и стать более
                <b>экологичными</b>.
            </div>
            <div class="about__image">
            </div>
        </div>
    </section>

    <div class="section-name">
        <h1>С нами вы научитесь</h1>
        <div class="section-line"></div>
    </div>

    <section class="learn">
        <div class="learn__item wow animate__animated animate__fadeInLeft">
            <img src="img/learn-1.png" alt="Eco life"/>
            <p>Жить более экологически-ориентированной жизнью</p>
        </div>
        <div class="learn__item wow animate__animated animate__fadeInDown">
            <img src="img/learn-4.png" alt="Reducing rubbish"/>
            <p>Уменьшать количество мусора, используемых ресурсов и выбирать продукты без лишней упаковки</p>
        </div>
        <div class="learn__item wow animate__animated animate__fadeInDown">
            <img src="img/learn-2.png" alt="Recycling"/>
            <p>Правильной сортировке и переработке отходов</p>
        </div>
        <div class="learn__item wow animate__animated animate__fadeInRight">
            <img src="img/learn-3.png" alt="New green tech"/>
            <p>Быть в курсе новейших технологиях и научных разработках, связанных с экологией</p>
        </div>
    </section>

    <div class="section-name">
        <h1>Мероприятия</h1>
        <div class="section-line"></div>
    </div>

    <section class="events">
        <div class="events__link">
            <a href="#" class="events__link_active">Ближайшие</a><span class="events__sep">/</span><a
                    href="#">Прошедшие</a>
        </div>

        <div class="events-container">
            <div class="event">
                <div class="event__date">
                    <div class="event__day">
                        <time datetime="2023-02-25">25</time>
                    </div>
                    <div class="event__time">
                        <time datetime="2023-02-25">февраля</time>
                        <br>
                        <time datetime="18:00">18:00-21:00</time>
                    </div>
                </div>

                <p class="event__title">EcoCareers Summit Series 2023</p>

                <button class="event__btn">Уведомить меня</button>
                <p class="event__error">Для регистрации нужно войти в аккаунт</p>
            </div>
            <div class="event">
                <div class="event__date">
                    <div class="event__day">
                        <time datetime="2023-02-25">25</time>
                    </div>
                    <div class="event__time">
                        <time datetime="2023-02-25">февраля</time>
                        <br>
                        <time datetime="18:00">18:00-21:00</time>
                    </div>
                </div>

                <p class="event__title">EcoCareers Summit Series 2023</p>

                <button class="event__btn">Уведомить меня</button>
            </div>
            <div class="event">
                <div class="event__date">
                    <div class="event__day">
                        <time datetime="2023-02-25">25</time>
                    </div>
                    <div class="event__time">
                        <time datetime="2023-02-25">февраля</time>
                        <br>
                        <time datetime="18:00">18:00-21:00</time>
                    </div>
                </div>

                <p class="event__title">EcoCareers Summit Series 2023</p>

                <button class="event__btn">Уведомить меня</button>
            </div>
            <div class="event">
                <div class="event__date">
                    <div class="event__day">
                        <time datetime="2023-02-25">25</time>
                    </div>
                    <div class="event__time">
                        <time datetime="2023-02-25">февраля</time>
                        <br>
                        <time datetime="18:00">18:00-21:00</time>
                    </div>
                </div>

                <p class="event__title">EcoCareers Summit Series 2023</p>

                <button class="event__btn">Уведомить меня</button>
            </div>
            <div class="event">
                <div class="event__date">
                    <div class="event__day">
                        <time datetime="2023-02-25">25</time>
                    </div>
                    <div class="event__time">
                        <time datetime="2023-02-25">февраля</time>
                        <br>
                        <time datetime="18:00">18:00-21:00</time>
                    </div>
                </div>

                <p class="event__title">EcoCareers Summit Series 2023</p>

                <button class="event__btn">Уведомить меня</button>
            </div>
        </div>
    </section>

    <div class="section-name">
        <h1>Категории</h1>
        <div class="section-line"></div>
    </div>

    <section class="categories">
        <div class="category">
            <div class="category__box">
                <p>Экологические технологии</p>
                <button class="category__button">Подробнее</button>
            </div>
        </div>
        <div class="category">
            <div class="category__box">
                <p>Экологические технологии</p>
                <button class="category__button">Подробнее</button>
            </div>
        </div>
        <div class="category">
            <div class="category__box">
                <p>Экологические технологии</p>
                <button class="category__button">Подробнее</button>
            </div>
        </div>
    </section>

    <div class="section-name">
        <h1>Эколятор</h1>
        <div class="section-line"></div>
    </div>

    <section class="calculator">
        <div class="calculator-left">
            <div class="inputBox">
                <input type="text" name="resource" required="required" autocomplete="off">
                <span>Введите количество потребляемого ресурса в месяц</span>
                <i></i>
            </div>
            <div class="inputBox__select">
                <select name="resource-type">
                    <option value="">Выберите тип ресурса</option>
                    <option value="E">Энергия</option>
                    <option value="W">Вода</option>
                    <option value="G">Газ</option>
                </select>
            </div>
            <button class="calculator__button">Рассчитать</button>
            <p class="calculator__notification">*Рассчеты могут изменяться в соответствии с вашим регионом</p>
            <p class="calculator__notification">*Рассчет идет только для 1 человека</p>
        </div>
        <div class="calculator-sep"></div>
        <div class="calculator-right">
            <p class="calculator__res">Общее потребление: <span id="res1"></span></p>
            <p class="calculator__res">Среднее потребление: <span id="res2"></span></p>
            <p class="calculator__res">Сравнение потребления: <span id="res3">Выберите тип ресурса и введите количество потребляемого ресурса в месяц, чтобы увидеть результаты</span>
            </p>
        </div>
    </section>

    <section class="articles">
        <h1>СВЕЖИЕ СТАТЬИ</h1>
        <div class="articles-container">
            <article class="article">
                <img src="img/article-img.png">
                <div class="article__box">
                    <p>Дешевле водить электромобиль или бензиновый автомобиль?</p>
                    <div class="article__info">
                        <p>Экологический образ жизни</p>
                        <time datetime="2023-03-12">12/03/2023</time>
                    </div>
                </div>
            </article>
            <article class="article">
                <img src="img/article-img.png">
                <div class="article__box">
                    <p>Дешевле водить электромобиль или бензиновый автомобиль?</p>
                    <div class="article__info">
                        <p>Экологический образ жизни</p>
                        <time datetime="2023-03-12">12/03/2023</time>
                    </div>
                </div>
            </article>
            <article class="article">
                <img src="img/article-img.png">
                <div class="article__box">
                    <p>Дешевле водить электромобиль или бензиновый автомобиль?</p>
                    <div class="article__info">
                        <p>Экологический образ жизни</p>
                        <time datetime="2023-03-12">12/03/2023</time>
                    </div>
                </div>
            </article>
            <article class="article">
                <img src="img/article-img.png">
                <div class="article__box">
                    <p>Дешевле водить электромобиль или бензиновый автомобиль?</p>
                    <div class="article__info">
                        <p>Экологический образ жизни</p>
                        <time datetime="2023-03-12">12/03/2023</time>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <div class="section-name">
        <h1>Календарь покупок</h1>
        <div class="section-line"></div>
    </div>

    <section class="calendar">
        <div class="calendar-left">
            <ul>
                <li>
                    <button class="calendar__button">Зима</button>
                </li>
                <li>
                    <button class="calendar__button_active">Весна</button>
                </li>
                <li>
                    <button class="calendar__button">Лето</button>
                </li>
                <li>
                    <button class="calendar__button">Осень</button>
                </li>
            </ul>
        </div>
        <div class="calendar-right">
            <ul>
                <li>
                    <p class="calendar__text">
                        Солнечные панели: лучшее время для покупки солнечных панелей . В это время года производители
                        часто предлагают скидки и специальные предложения.
                    </p>
                </li>
                <li>
                    <p class="calendar__text">
                        Солнечные панели: лучшее время для покупки солнечных панелей . В это время года производители
                        часто предлагают скидки и специальные предложения.
                    </p>
                </li>
                <li>
                    <p class="calendar__text">
                        Солнечные панели: лучшее время для покупки солнечных панелей . В это время года производители
                        часто предлагают скидки и специальные предложения.
                    </p>
                </li>
                <li>
                    <p class="calendar__text">
                        Солнечные панели: лучшее время для покупки солнечных панелей . В это время года производители
                        часто предлагают скидки и специальные предложения.
                    </p>
                </li>
                <li>
                    <p class="calendar__text">
                        Солнечные панели: лучшее время для покупки солнечных панелей . В это время года производители
                        часто предлагают скидки и специальные предложения.
                    </p>
                </li>
                <li>
                    <p class="calendar__text">
                        Солнечные панели: лучшее время для покупки солнечных панелей . В это время года производители
                        часто предлагают скидки и специальные предложения.
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <div class="section-big-name">
        <h1>Давайте дружить</h1>
        <div class="section-big-line"></div>
    </div>

    <section class="contact">
        <div class="product-container">
            <h4>Можете попробовать наши онлайн курсы</h4>

            <div class="product">
                <div>
                    <div class="product-img"><img src="./img/contact.png"></div>
                    <div class="product-title">Курс по защите окружающей среды</div>
                    <div class="product-price">24900 тг</div>
                </div>
                <div class="product-button">Купить сейчас</div>
            </div>
        </div>

        <form method="post" action="">
            <div class="contact__form">
                <div class="inputBox">
                    <input type="text" name="resource" required="required" autocomplete="off">
                    <span>Введите имя</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="resource" required="required" autocomplete="off">
                    <span>Введите E-mail</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="resource" required="required" autocomplete="off">
                    <span>Ваш номер телефона</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="resource" required="required" autocomplete="off">
                    <span>Введите тему</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="resource" required="required" autocomplete="off">
                    <span>Сообщение</span>
                    <i></i>
                </div>
                <div class="contact__submit">
                    <input type="submit" value="Оставить заявку">
                </div>
            </div>
        </form>
    </section>

</main>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>Социальные Сети</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Контакты</h4>
                <div class="footer-tex">
                    <ul>
                        <li>Алматы, ул. Желтоксан 115,БЦ Кайсар Плаза, 2 этаж</a></li>
                        <li>Время работы: 10:00 - 19:00</a></li>
                        <li>+7 778 000 00 00</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-col">
                <h4>Ссылки</h4>
                <ul>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Технологии</a></li>
                    <li><a href="#">Переработка отходов</a></li>
                    <li><a href="#">Эко жизнь</a></li>
                    <li><a href="#">Обратная связь</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d37793.14095394053!2d71.44896074074114!3d51.153610088122484!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42458142baa07635%3A0x5728ef84632c9957!2z0KLQoNCmIEV1cmFzaWE!5e0!3m2!1sru!2skz!4v1678611580780!5m2!1sru!2skz" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>