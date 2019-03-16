<!-- Блок Head Header -->
<?php
    $google_fonts = "https://fonts.googleapis.com/css?family=Roboto+Condensed";
    $title = "Контакты";
    $top_name = "MyMoscow";
    $name1 = "Главная";
    $name2 = "Наши услуги";
    $name3 = "О компании";
    $name4 = "Контакты";
    $name5 = "Отзывы";
    include ($_SERVER['DOCUMENT_ROOT'] . "/modules/head_header.php"); 
?>
<!-- ___________________________________________________________________________________________________________ -->
<!-- Подключение стилей общей странички "Контакты" -->
<link rel="stylesheet" href="..\style\style_contacts.css">
 
<body id="top">
    <!-- Блок title -->
    <div class="title-img">
        <?php
        $title_name1 = "MyMoscow";
        $title_name2 = "агенство интересных маршрутов";
        $title_name3 = "-Контакты-";
        $link_style_title_block = "../style/style_modules/title-block.css";
        include ($_SERVER['DOCUMENT_ROOT'] . "/modules/title-block.php");
        ?>
    </div>
    <!-- _____________________________________________________________________________________________________ -->
    <main>
        <div class="contacts-block wrapper">
            <h2>контакты</h2>
            <div class="contacts-block-text"> 
                <p>Мы - команда тех, кто любит историю и любит Москву.</p>
                <p>
                Москва – это не только место по «заколачиванию денег» и 
                «взращиванию карьеры», а еще и бесконечно красивые памятники природы, 
                заказники, парки, заповедники. Активный отдых в Москве и Подмосковье – 
                это отличная возможность вырваться из душного мегаполиса куда-нибудь 
                в «дебри», навстречу приключениям. К счастью, не все Подмосковье еще 
                «облагорожено» асфальтными дорожками и высоченными коттеджными заборами. 
                Еще встречаются места, настолько глухие и далекие, что, очутившись там, 
                кажется, что ты – первый человек, ступивший на эту землю. 
                </p>
                <p>
                Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и 
                откроет для себя все красоты 100% бездорожья турист, проводящий свой 
                активный отдых в Подмосковье.
                </p>
            </div>
            <div class="contacts-person-block">
                <div class="person-block">
                    <div class="person-img img-m"></div>
                    <div class="person-info">
                        <p>Александр Рыбаков</p>
                        <p>директор</p>
                        <p>По всем вопросам пишите на почту:</p>
                        <a href="mailto:rybakov@mymoscow.ru">rybakov@mymoscow.ru</a>
                    </div>
                </div>
                <div class="person-block">
                    <div class="person-img img-w"></div>
                    <div class="person-info">
                        <p>Елена Белкина</p>
                        <p>руководитель корпоративного отдела</p>
                        <p>По вопросам корпоративных экскурсий:</p>
                        <a href="mailto:belkina@mymoscow.ru">belkina@mymoscow.ru</a>
                    </div>
                </div>
            </div>
            <div class="contacts-info-form-block flex-wrap">
                <div class="contacts-info-block">
                    <div class="adr-block">
                        <div class="img-adr place-img"></div>
                        <p>
                            Москва, <br>
                            Большая Спасская 12
                        </p>
                    </div>
                    <div class="adr-block">
                        <div class="img-adr mail-img"></div>
                        <p>
                            E-mail: <br>
                            info@mymoscow.ru
                        </p>
                    </div>
                    <div class="adr-block">
                        <div class="img-adr phone-img"></div>
                        <p>
                            Телефон: <br>
                            8 (495) 626-46-00
                        </p>
                    </div>
                </div>
                <div class="contacts-form-block">
                    <p>Напишите нам</p>
                    <form action="/functions/func_array.php" method="post">
                        <label>
                            <input type="text" name="name" autocomplete="off">
                            <div class="test">Ваше Имя</div>
                        </label>
                        <label>
                            <input type="text" name="email" autocomplete="off">
                            <div class="test">Ваш E-mail</div>
                        </label>
                        <label>
                            <textarea name="message" id="" cols="30" rows="5" autocomplete="off"></textarea>
                            <div class="test">Напишите сообщение</div>
                        </label>
                        
                        <input type="submit" value="отправить сообщение" class="sub:hover">
                    </form>
                </div>

                <!-- Блок скрытого окна обратной связи с формой -->
                <div class="hide-form-block">
                    <div class="form-block">
                        <div class="cancel">
                            <div class="cancel-arrow"></div>
                        </div>
                        <h3> Здравствуйте   ,спасибо за Ваше письмо. Мы будем рады Вам ответить в ближайшее время. </h3>
                        <div class="form-info-block">
                            <div class="info">
                                <p>Ваше имя:</p>
                                <div></div>
                            </div>
                            <div class="info">
                                <p>Ваш E-mail:</p>
                                <div></div>
                            </div>
                            <div class="info">    
                                <p>Ваше письмо:</p>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ___________________________________________________________________________________________ -->
            </div>
        </div> 
        <iframe  style="pointer-events: none;" src="https://yandex.ru/map-widget/v1/?um=constructor%3A2b6e6609bff132a0b507ab051ed8ed9062cf107f5b9338adfa703b084cc4ab4a&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
    </main>
    
<!-- Блок footer -->
<?php
    $adress = "Москва, Большая Спасская 12";
    $email =  "moscow@imoscow.ru";
    $phone_number = "8 (495) 626-46-00";
    include ( $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php");
?>
    
<!-- Блок стрелка вверх -->
<?php include ( $_SERVER['DOCUMENT_ROOT'] . "/modules/arrow_up.php") ?>
<!-- _____________________________________________________________________________________________________ -->


<script src="../script/jquery.js"></script>
<script src="../script/script_contacts.js"></script>    
</body>
</html>