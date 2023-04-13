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
            <div class="about__text_mobile">Наша миссия - вдохновить и поддержать людей в изменении своего образа жизни, чтобы сделать наш мир более устойчивым и экологичным. </div>
            <div class="about__text">
                Наша миссия - вдохновить и поддержать людей в изменении своего образа жизни, чтобы сделать наш мир более устойчивым и экологичным.
            </div>
            <div class="about__image" style="background-image: url('img/ecology-3.webp')">
            </div>
        </div>

        <div class="about__box">
            <div class="about__image" style="background-image: url('img/ecology-2.jpg')">
            </div>
            <div class="about__text">
                Мы предлагаем множество ресурсов и инструментов, чтобы помочь вам начать свой путь к жизни без отходов. На нашем сайте вы найдете множество статей, советов и рекомендаций по различным аспектам этой темы.
            </div>
            <div class="about__text_mobile">Мы предлагаем множество ресурсов и инструментов, чтобы помочь вам начать свой путь к жизни без отходов.</div>
        </div>

        <div class="about__box">
            <div class="about__text_mobile">Если вы хотите изменить свою жизнь, присоединяйтесь к нашей компании!.</div>
            <div class="about__text">
                Если вы хотите изменить свою жизнь, сделать ее более экологичной и внести свой вклад в охрану окружающей среды, присоединяйтесь к нашей компании! Мы всегда готовы помочь и поддержать вас на этом пути.
            </div>
            <div class="about__image" style="background-image: url('img/ecology-4.jpg')">
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

    <section class="events wow animate__animated animate__fadeInBottomLeft">
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
                        <time datetime="2023-02-25">22</time>
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
                        <time datetime="2023-02-25">18</time>
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
                        <time datetime="2023-02-25">14</time>
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
                        <time datetime="2023-02-25">10</time>
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

    <section class="categories wow animate__animated animate__fadeInBottomRight">
        <div id="tech" class="category">
            <div class="category__box">
                <p>Экологические технологии</p>
                <button class="category__button" onclick="infoShow(1)">Подробнее</button>
            </div>
        </div>
        <div id="ecolifestyle" class="category" style="background-image: url('./img/category-2.png')">
            <div class="category__box">
                <p>Экологический образ жизни</p>
                <button class="category__button" onclick="infoShow(2)">Подробнее</button>
            </div>
        </div>
        <div class="category" style="background-image: url('./img/category-3.png')">
            <div id="recycle" class="category__box">
                <p>Переработка отходов</p>
                <button class="category__button" onclick="infoShow(3)">Подробнее</button>
            </div>
        </div>
    </section>

    <div class="pop-up-category">
        <button class="pop-up-close" onclick="infoClose(1)"><i class="fas fa-times"></i></button>
        <div>
            <section class="pop-up-text">
                <h1>Экологические технологии</h1>
                <p>
                    Экологические технологии – это технологии, которые направлены на улучшение качества окружающей среды
                    и
                    уменьшение вредного влияния производства на экологическую обстановку. Эти технологии могут быть
                    использованы в различных областях, от производства до энергетики и транспорта. В этой статье мы
                    рассмотрим некоторые из самых инновационных экологических технологий и то, как они могут помочь
                    бороться
                    с проблемами экологии.
                    <br>
                    <br>
                    Первая экологическая технология, о которой мы говорим, – это солнечные батареи. Солнечные батареи
                    используют солнечную энергию для производства электроэнергии, что позволяет избежать использования
                    ископаемых топлив, таких как уголь и нефть. Эта технология широко используется в современных домах и
                    предприятиях, и она позволяет существенно снизить затраты на энергию и уменьшить вредное воздействие
                    на
                    окружающую среду.
                    <br>
                    <br>
                    Вторая экологическая технология, о которой мы говорим, – это ветряные турбины. Ветряные турбины
                    используют ветер для производства электроэнергии. Они являются одной из самых эффективных технологий
                    для
                    генерации чистой энергии, и они используются во многих странах по всему миру. Ветряные турбины могут
                    производить энергию на протяжении многих лет, и они являются надежной источником энергии.
                    <br>
                    <br>
                    Третья экологическая технология, о которой мы говорим, – это электромобили. Электромобили используют
                    электричество вместо бензина или дизельного топлива. Они не только экологичнее, но и более
                    экономичны,
                    чем традиционные автомобили. Электромобили могут проехать на одном заряде до 500 км, и их зарядка
                    занимает гораздо меньше времени, чем заправка топливом.
                </p>
            </section>
            <img src="img/category-1.png">
        </div>
    </div>
    <div class="pop-up-category">
        <button class="pop-up-close" onclick="infoClose(2)"><i class="fas fa-times"></i></button>
        <div>
            <section class="pop-up-text">
                <h1>Экологический образ жизни</h1>
                <p>
                    Экологический образ жизни – это способ жизни, который направлен на минимизацию негативного
                    воздействия
                    на окружающую среду и уменьшение следов, которые мы оставляем за собой на планете. Это понятие
                    включает
                    в себя множество аспектов, начиная от питания и выбора транспорта, заканчивая сокращением
                    использования
                    пластика и выбором экологичных товаров. В этой статье мы рассмотрим, какие изменения в нашей
                    повседневной жизни могут помочь нам стать более экологически осознанными и сохранить природу для
                    будущих
                    поколений.
                    <br>
                    <br>
                    Первым шагом на пути к экологическому образу жизни может быть пересмотр нашего рациона питания.
                    Избыток
                    мяса в нашей диете является одним из главных источников выбросов парниковых газов. Уменьшение
                    потребления мяса и замена его более растительными продуктами может помочь снизить наш экологический
                    след. Кроме того, следует выбирать продукты, произведенные местными производителями и уменьшить
                    использование упаковки и продуктов, содержащих пальмовое масло.
                    <br>
                    <br>
                    Выбор транспорта также играет важную роль в нашем экологическом следе. Использование общественного
                    транспорта, велосипедов или ходьба вместо езды на автомобиле может значительно снизить наши выбросы
                    углекислого газа. Если автомобиль необходим, то лучше выбирать гибридные или электрические модели.
                    <br>
                    <br>
                    Сокращение использования пластиковых изделий – еще один способ минимизации нашего экологического
                    следа.
                    Избегайте пластиковых одноразовых стаканчиков и бутылок, используйте собственные контейнеры и
                    переходите
                    на более экологически чистые альтернативы, такие как стеклянные, металлические или бамбуковые
                    изделия.
                </p>
            </section>
            <img src="img/category-2.png">
        </div>
    </div>
    <div class="pop-up-category">
        <button class="pop-up-close" onclick="infoClose(3)"><i class="fas fa-times"></i></button>
        <div>
            <section class="pop-up-text">
                <h1>Переработка отходов</h1>
                <p>
                    Переработка отходов - это процесс превращения отходов в новые продукты, которые могут быть
                    использованы
                    вместо сырьевых материалов. Это важная составляющая устойчивого развития и сокращения негативного
                    воздействия на окружающую среду. В этой статье мы рассмотрим, как работает процесс переработки
                    отходов и
                    как он может помочь снизить объемы отходов, отправляемых на свалки.
                    <br>
                    <br>
                    Переработка отходов начинается с сбора и разделения материалов. Сначала отходы сортируются на месте
                    происхождения, затем их отправляют на специализированные полигоны, где они проходят дополнительную
                    сортировку по типу материала. Затем материалы перерабатываются с помощью различных технологий, чтобы
                    создать новые продукты.
                    <br>
                    <br>
                    При переработке пластиковых отходов, например, пластик сначала измельчается на мелкие кусочки, затем
                    перерабатывается в гранулы, которые могут быть использованы для производства новых пластиковых
                    изделий.
                    Металлические отходы, такие как алюминий, переплавляются и формируются в новые металлические
                    изделия.
                    <br>
                    <br>
                    Одна из наиболее известных и успешных форм переработки отходов - это переработка бумаги. Бумага
                    сначала
                    измельчается на мелкие кусочки, затем превращается в пасту, которая затем снова превращается в новую
                    бумагу. Этот процесс позволяет использовать старую бумагу вместо новой, что приводит к сокращению
                    вырубки лесов.
                    <br>
                    <br>
                    Переработка отходов может привести к значительным экологическим выгодам. Сокращение объемов отходов
                    на
                    свалках снижает не только затраты на их утилизацию, но и объемы выбросов парниковых газов. Кроме
                    того,
                    переработка отходов позволяет сэкономить сырьевые материалы и энергию, которые необходимы для
                    производства новых материалов.
                </p>
            </section>
            <img src="img/category-3.png">
        </div>
    </div>
    <div class="pop-up-category">
        <button class="pop-up-close" onclick="infoClose(4)"><i class="fas fa-times"></i></button>
        <div>
            <section class="pop-up-text">
                <h1>Дешевле водить электромобиль или бензиновый автомобиль?</h1>
                <p>
                    Определить, дешевле ли водить электромобиль или бензиновый автомобиль, зависит от многих факторов,
                    таких как стоимость приобретения автомобиля, стоимость зарядки или заправки, стоимость технического
                    обслуживания и ремонта, а также стоимость страховки. В этой статье мы рассмотрим каждый из этих
                    факторов и попытаемся ответить на вопрос, какой тип автомобиля является более экономичным.
                    <br><br>
                <h4>Стоимость приобретения</h4>
                Стоимость электромобилей обычно выше, чем у бензиновых автомобилей той же категории. Однако, существуют
                программы государственной поддержки, которые могут существенно снизить стоимость покупки электромобиля.
                Кроме того, электромобили обычно имеют более низкие эксплуатационные расходы, что может окупиться в
                будущем.
                <br><br>
                <h4>Стоимость зарядки или заправки</h4>
                Электромобили, как правило, обходятся дешевле в плане затрат на зарядку по сравнению с затратами на
                заправку бензином. В зависимости от местности и тарифной политики региона, зарядка электромобиля может
                обойтись в 2-3 раза дешевле, чем заправка бензином.
                <br><br>
                <h4>Стоимость технического обслуживания и ремонта</h4>
                Техническое обслуживание и ремонт электромобилей обычно проще и дешевле, чем у бензиновых автомобилей.
                Это связано с тем, что электромобили имеют меньше движущихся деталей, что снижает риск поломок и
                необходимость их замены.
                <br><br>
                <h4>Стоимость страховки</h4>
                Стоимость страховки электромобилей может быть ниже, чем у бензиновых автомобилей. Это связано с тем, что
                электромобили обычно менее склонны к авариям и имеют меньшую стоимость восстановления после аварии.
                <br><br>
                В целом, стоимость эксплуатации электромобиля может быть дешевле, чем у бензинового автомобиля, но это
                зависит от конкретной ситуации
                </p>
            </section>
            <img src="img/article-img.png">
        </div>
    </div>
    <div class="pop-up-category">
        <button class="pop-up-close" onclick="infoClose(5)"><i class="fas fa-times"></i></button>
        <div>
            <section class="pop-up-text">
                <h1>В чем преимущества умного счетчика?</h1>
                <p>
                    Умный счетчик - это счетчик потребления электроэнергии, который оснащен современными технологиями,
                    позволяющими получать детальную информацию о потреблении электроэнергии в режиме реального времени.
                    Преимущества умного счетчика следующие:
                    <br><br>
                    Экономия электроэнергии
                    Умный счетчик позволяет контролировать свое потребление электроэнергии в режиме реального времени и
                    точно знать, сколько энергии используется в определенный момент времени. Это помогает оптимизировать
                    потребление энергии, сокращать излишнее потребление и, таким образом, экономить на счетах за
                    электроэнергию.
                    <br><br>
                    Удобство использования
                    Умный счетчик имеет дисплей или возможность просмотра информации в мобильном приложении, что
                    позволяет в режиме реального времени отслеживать потребление электроэнергии и принимать меры для
                    экономии. Также, умный счетчик может быть удаленно управляемым, что дает возможность управлять
                    потреблением энергии из любой точки мира, где есть интернет.
                    <br><br>
                    Увеличение надежности и безопасности
                    Умный счетчик обладает более высокой надежностью и безопасностью, чем традиционный счетчик, так как
                    он может быстро обнаруживать неисправности и отправлять сообщения об этом оператору сети
                    электропитания. Это помогает операторам сети быстро устранять неисправности и предотвращать аварии,
                    что повышает надежность и безопасность работы сети.
                    <br><br>
                    Автоматический сбор показаний
                    Умный счетчик автоматически собирает показания потребления электроэнергии, что снижает количество
                    ошибок и несоответствий, связанных с вручную введенными показаниями. Это также снижает количество
                    работ по сбору показаний и уменьшает вероятность мошенничества с показаниями.
                </p>
            </section>
            <img src="img/article-4.png">
        </div>
    </div>
    <div class="pop-up-category">
        <button class="pop-up-close" onclick="infoClose(6)"><i class="fas fa-times"></i></button>
        <div>
            <section class="pop-up-text">
                <h1>Все, что вам нужно знать о зеленых технологиях в 2023 году</h1>
                <p>
                    Зеленые технологии – это технологии, которые создаются с целью уменьшения воздействия на окружающую
                    среду и уменьшения углеродного следа. В 2023 году зеленые технологии все еще будут находиться в
                    центре внимания и будут развиваться быстрыми темпами, поскольку страны всего мира стремятся к
                    достижению целей устойчивого развития и сокращения выбросов парниковых газов.
                    <br><br>
                    Вот некоторые из самых актуальных и перспективных зеленых технологий в 2023 году:
                    <br><br>
                    Энергия от ветра
                    Энергия от ветра – это один из самых популярных источников возобновляемой энергии в мире, который
                    производит электроэнергию с помощью вращающихся ветряных турбин. Кроме того, энергия от ветра имеет
                    меньший негативный экологический след, чем традиционные источники энергии, такие как газ, нефть и
                    уголь.
                    <br><br>
                    Энергия от солнца
                    Энергия от солнца – это еще один популярный источник возобновляемой энергии, который использует
                    солнечные панели для преобразования солнечного света в электроэнергию. Энергия от солнца является
                    безопасной, чистой и надежной формой энергии, которая не загрязняет окружающую среду.
                    <br><br>
                    Электромобили
                    Электромобили – это транспортные средства, которые используют электрический двигатель вместо
                    традиционного бензинового или дизельного двигателя. Электромобили имеют меньший углеродный след, чем
                    традиционные автомобили, и способствуют сокращению выбросов парниковых газов.
                </p>
            </section>
            <img src="img/article-3.png">
        </div>
    </div>
    <div class="pop-up-category">
        <button class="pop-up-close" onclick="infoClose(7)"><i class="fas fa-times"></i></button>
        <div>
            <section class="pop-up-text">
                <h1>Пять ключевых слов со второй недели COP27</h1>
                <p>
                <ul>
                    <li>Углеродный след</li>
                    <li>План действий по климату</li>
                    <li>Эмиссионные кредиты</li>
                    <li>Возобновляемая энергия</li>
                    <li>Сотрудничество международного сообщества</li>
                </ul>
                </p>
            </section>
            <img src="img/article-2.png">
        </div>
    </div>

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

    <section id="news" class="articles">
        <h1>СВЕЖИЕ СТАТЬИ</h1>
        <div class="articles-container">
            <article class="article" onclick="infoShow(4)">
                <img src="img/article-img.png">
                <div class="article__box">
                    <p>Дешевле водить электромобиль или бензиновый автомобиль?</p>
                    <div class="article__info">
                        <p>Экологический образ жизни</p>
                        <time datetime="2023-03-12">12/03/2023</time>
                    </div>
                </div>
            </article>
            <article class="article" onclick="infoShow(5)">
                <img src="img/article-4.png">
                <div class="article__box">
                    <p>В чем преимущества умного счетчика?</p>
                    <div class="article__info">
                        <p>Экологический образ жизни</p>
                        <time datetime="2023-03-03">3/03/2023</time>
                    </div>
                </div>
            </article>
            <article class="article" onclick="infoShow(6)">
                <img src="img/article-3.png">
                <div class="article__box">
                    <p>Все, что вам нужно знать о зеленых технологиях в 2023 году</p>
                    <div class="article__info">
                        <p>Экологические технологии</p>
                        <time datetime="2023-02-28">28/02/2023</time>
                    </div>
                </div>
            </article>
            <article class="article" onclick="infoShow(7)">
                <img src="img/article-2.png">
                <div class="article__box">
                    <p>Пять ключевых слов со второй недели COP27</p>
                    <div class="article__info">
                        <p>Экологический образ жизни</p>
                        <time datetime="2023-02-24">24/02/2023</time>
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
                    <button class="calendar__button" data-season="winter">Зима</button>
                </li>
                <li>
                    <button class="calendar__button calendar__button_active" data-season="spring">Весна</button>
                </li>
                <li>
                    <button class="calendar__button" data-season="summer">Лето</button>
                </li>
                <li>
                    <button class="calendar__button" data-season="autumn">Осень</button>
                </li>
            </ul>
        </div>
        <div class="calendar-right">
            <ul>
                <li>
                    <p class="calendar__text" data-season="winter">
                        Органические продукты питания. Зимой многие фрукты и овощи выращиваются в теплицах или
                        перевозятся из других стран, что может привести к использованию большого количества пестицидов и
                        других химических веществ. Покупка органических продуктов питания может помочь вам избежать
                        вредных веществ и получить экологически чистые продукты.
                    </p>
                    <p class="calendar__text" data-season="winter">
                        Экологически чистые товары для дома. Зимой мы проводим больше времени внутри дома, и это может
                        привести к большему воздействию нашей среды. Покупка экологически чистых товаров для дома, таких
                        как моющие средства, стиральный порошок, мыло и т.д., может помочь вам очистить свой дом без
                        использования вредных химических веществ.
                    </p>
                    <p class="calendar__text" data-season="winter">
                        Эко-одежда. Зимой мы носим больше одежды, что может привести к большему воздействию нашей кожи.
                        Покупка экологически чистой одежды, сделанной из натуральных материалов, таких как хлопок, лен и
                        т.д., может помочь вам избежать вредных химических веществ, которые могут находиться в
                        традиционной одежде.
                    </p>
                </li>
                <li>
                    <p class="calendar__text" data-season="spring">
                        Семена и рассада овощей и фруктов. Весна - это время для высадки овощей и фруктов в саду или на
                        приусадебном участке. Покупка семян и рассады может помочь вам вырастить свежие, экологически
                        чистые продукты.</p>
                    <p class="calendar__text" data-season="spring">
                        Товары для садоводства. Весна - время, когда садоводы начинают подготавливать свои сады к посеву
                        и посадке. Эко-товары для садоводства могут включать в себя натуральные удобрения, средства
                        защиты растений на основе растительных компонентов и другие экологически чистые материалы.
                    </p>
                    <p class="calendar__text" data-season="spring">
                        Органическая косметика и гигиенические средства. Весна - это время для очищения и обновления.
                        Покупка органической косметики и гигиенических средств может помочь вам избежать вредных
                        химических веществ, которые могут находиться в обычных товарах.
                    </p>
                    </p>
                    <p class="calendar__text" data-season="spring">
                        Велосипеды и другие товары для активного отдыха на природе. Весна - это время для активного
                        отдыха на свежем воздухе. Покупка велосипедов, беговых дорожек и других товаров для активного
                        отдыха может помочь вам наслаждаться весенней погодой и природой.
                    </p>
                </li>
                <li>
                    <p class="calendar__text" data-season="summer">
                        Экологически чистые солнцезащитные средства. Летом мы часто используем солнцезащитные средства,
                        чтобы защитить свою кожу от опасных ультрафиолетовых лучей. Однако, многие солнцезащитные
                        средства содержат вредные химические вещества, которые могут повредить окружающую среду и наше
                        здоровье. Покупка экологически чистых солнцезащитных средств может помочь избежать этих проблем.
                    </p>
                    <p class="calendar__text" data-season="summer">
                        Экологически чистые товары для пикника и барбекю. Летом мы часто устраиваем пикники и барбекю на
                        открытом воздухе. Покупка экологически чистых товаров для пикника и барбекю, таких как
                        биоразлагаемые тарелки, стаканы и приборы, может помочь вам избежать использования одноразовых
                        пластиковых изделий.
                    </p>
                </li>
                <li>
                    <p class="calendar__text" data-season="autumn">
                        Экологически чистые термосы и контейнеры для еды. Осень - это время года, когда мы часто берем с
                        собой горячие напитки и еду на прогулки и поездки. Покупка экологически чистых термосов и
                        контейнеров для еды, которые можно использовать многократно, может помочь вам избежать
                        использования одноразовых пластиковых контейнеров и упаковок.
                    </p>
                    <p class="calendar__text" data-season="autumn">
                        Экологически чистые средства для ухода за домом. Осень - это время, когда мы готовим свой дом к
                        зиме, и покупка экологически чистых средств для уборки и ухода за домом, таких как мыло,
                        стиральный порошок и очистители воздуха, может помочь избежать вредных химических веществ.
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <div class="section-big-name">
        <h1>Давайте дружить</h1>
        <div class="section-big-line"></div>
    </div>

    <section id="feedback" class="contact">
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

        <form method="post" action="subform.php">
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d37793.14095394053!2d71.44896074074114!3d51.153610088122484!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42458142baa07635%3A0x5728ef84632c9957!2z0KLQoNCmIEV1cmFzaWE!5e0!3m2!1sru!2skz!4v1678611580780!5m2!1sru!2skz"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>