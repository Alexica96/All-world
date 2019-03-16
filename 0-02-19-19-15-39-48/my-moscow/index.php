<!-- Блок Head Header -->
<?php
    $google_fonts = "https://fonts.googleapis.com/css?family=Roboto+Condensed";
    $title = "Необычная Москва: Экскурсии";
    $top_name = "MyMoscow";
    $name1 = "Главная";
    $name2 = "Наши услуги";
    $name3 = "О компании";
    $name4 = "Контакты";
    $name5 = "Отзывы";
    include ("modules/head_header.php"); 
?>
<!-- ____________________________________________________________________________________ -->
<!-- Подключение стилей общей странички "Наши услуги" -->
<link rel="stylesheet" href= "/style.css">
<!-- ____________________________________________________________________________________ -->
<body id="top">
<!-- Блок слайдер и заглавие  -->
    <div class="slider">
        <section class="slider-block-name-button wrapper">
            <h1>Необычная Москва</h1>
            <p>My Moscow - агенство интересных маршрутов</p>
            <div class="slider-button-block">
                <div class="slider-button">
                    <div></div>
                </div>
                <div class="slider-button">
                    <div></div>
                </div>
            </div>
            <div class="slider-button-name">ПОДРОБНЕЕ О НАС</div>
        </section>
        <div class="slider-flex">
            <div class="slider-flex-item"></div>
            <div class="slider-flex-item"></div>
            <div class="slider-flex-item"></div>
            <div class="slider-flex-item"></div>
            <div class="slider-flex-item"></div>
        </div>
    </div>
    <main>
        <section class="sec2 wrapper" id="service">
            <h2>что мы предлагаем?</h2>
            <p class="sec2-p-name">Наша главная цель - рассказать о Москве так, чтобы это было интересно всем!</p>
            <div class="sec2-block flex-wrap">
                <?php
                    $db = mysqli_connect('localhost', 'root', '', '02112018_tomin');
                    mysqli_set_charset($db, 'utf8');

                    $sql = "SELECT * FROM `our_office` ";
                    
                    $result = mysqli_query($db, $sql);

                    while($row = mysqli_fetch_assoc($result)){
                        if( $row['priority'] == 0){
                            continue;
                        }
                        echo "
                            <div class='sec2-b1'>
                                <div class='sec2-b1-icon' style='background-image : url({$row['img_src']})' > </div>
                                <div class='sec2-b1-info'>
                                    <h3> {$row['name']} </h3>
                                    <p> {$row['content']} </p> 
                                </div>
                            </div>
                        ";

                    }

                    echo "<pre>";
                    print_r(mysqli_fetch_assoc($result));
                    echo "</pre>"; 
                
                ?>
            </div>
        </section>
        <section class="sec3 flex-wrap" id="company">
            <div class="sec3-image"></div>
            <div class="sec3-info">
                <h3>кто мы такие</h3>
                <div class="sec3-info-block">
                    <p>Мы - команда тех, кто любит историю и любит Москву.</p>
                    <p>
                        Москва – это не только место по «заколачиванию денег» и «взращиванию карьеры», 
                        а еще и бесконечно красивые памятники природы, заказники, парки, заповедники. 
                        Активный отдых в Москве и Подмосковье – это отличная возможность вырваться из 
                        душного мегаполиса куда-нибудь в «дебри», навстречу приключениям. К счастью, 
                        не все Подмосковье еще «облагорожено» асфальтными дорожками и высоченными 
                        коттеджными заборами. Еще встречаются места, настолько глухие и далекие, 
                        что, очутившись там, кажется, что ты – первый человек, ступивший на эту землю.
                    </p>
                    <p>
                        Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет 
                        для себя все красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.
                    </p>
                    <div class="sec3-button">подробнее о нас</div>
                </div>
            </div>
        </section>
        <section class="sec4">
            <h2>Москва в фотографиях</h2>
            <div class="sec-shape"></div>
            <p>Проще всего рассказать обо всем в фотографиях. Смотрите наши фотоотчеты и присылайте нам свои фотографии.</p>
            <div class="sec4-block flex-wrap">
                <div class="sec4-img img1"></div>
                <div class="sec4-img img2"></div>
                <div class="sec4-img img3"></div>
                <div class="sec4-img img4"></div>
                <div class="sec4-img img5"></div>
                <div class="sec4-img img6"></div>
                <div class="sec4-img img7"></div>
                <div class="sec4-img img8"></div>
            </div>
        </section>
        <section class="sec5 wrapper">
            <h2>отзывы</h2>
            <div class="sec-shape"></div>
            <div class="sec5-block">
                <div class="sec5-block-rev flex-wrap" id="rev">
                    <div class="sec5-rev">
                        <div class="sec5-rev-name">
                            <div class="sec5-rev-img rev-img1"></div>
                            <p>Екатерина Васильева</p>
                        </div> 
                        <div class="sec5-rev-info">
                            <p>
                                Были с дочкой и подругой на ночной экскурсии. Все таки как много зависит от экскурсовода! 
                                Мы все четыре часа ходили за Станиславом Симоновым, как кролики. Боялись пропустить хоть 
                                одно слово. При этом моей дочке - которая побывала во многих местах и с детства искушенная 
                                на интересные события - была сильно увлечена.
                            </p>
                        </div>
                        <div class="sec5-rev-button">Читать отзыв</div>
                    </div>
                </div>
                <div class="sec5-block-rev flex-wrap">
                    <div class="sec5-rev">
                        <div class="sec5-rev-name">
                            <div class="sec5-rev-img rev-img2"></div>
                            <p>Анна Крушевская</p>
                        </div>
                        <div class="sec5-rev-info">
                            <p>
                                Ездили на экскурсию с семиклассниками и родителями. Всем очень понравилось! 
                                Экскурсовод Михаил Борисович очень интересно, необычно и с юмором рассказывал 
                                о Москве 16 века. Гибко подстраивал эксукурсию под интересы и потребности слушателей, 
                                ловко «управлял» подачей автобуса, не давая нам замёрзнуть.) Огромное спасибо!
                            </p>
                        </div>
                        <div class="sec5-rev-button">Читать отзыв</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec6-form wrapper">
            <div>
                <h2>напишите нам</h2>
                <div class="sec-shape"></div>
            </div>
            <form action="../handlers/form.php" method="post">
                <div class="sec6-form-block flex-wrap">
                    <div class="form-block-text">
                        <div class="name-text-block">
                            <label>
                                <input type="text" name="name">
                                <div>Ваше имя</div>
                            </label>
                            <label>
                                <input type="text" name="email">
                                <div>Ваш E-mail</div>
                            </label>
                            <label>
                                <input type="text" name="phone">
                                <div>Ваш телефон</div>
                            </label>
                        </div>
                        <div class="radio-block-email-phone flex-wrap">
                            <div class="flex-wrap">
                                <p>По E-mail</p>
                                <label>
                                    <input type="radio" name="connect" value="email" checked>
                                    <div class="radio"></div>
                                </label>
                            </div>
                            <div class="flex-wrap">
                                <label>
                                    <input type="radio" name="connect" value="phone">
                                    <div class="radio"></div>
                                </label>
                                <p>По телефону</p>
                            </div>
                        </div>
                        <div class="test3">
                            <p>Выберите офис:</p>                       
                            <select name="city" >
                                <optgroup label="Столицы">
                                    <option value="Офис в Москве">Офис в Москве</option>
                                    <option value="Офис в Петербурге">Офис в Петербурге</option>
                                </optgroup>
                                <optgroup label="Регионы">
                                    <option value="Офис в Волгограде">Офис в Волгограде</option>
                                    <option value="Офис в Твери">Офис в Твери</option>
                                    <option value="Офис в Твери">Офис во Владивостоке</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-block-text">
                        <div class="message-text-block">
                            <label>
                                <textarea name="message" id="" cols="30" rows="6"></textarea>
                                <div class="top-message">Ваше сообщение</div>
                            </label> 
                        </div>    
                        <div class="time">
                            <p>Выберите удобное время:</p>
                            <div class="flex-wrap">
                                <label>
                                    <input type="checkbox" name="connect_time[]" value="9:00 - 11:00">
                                    <div></div>
                                    <p>9:00 - 11:00</p>
                                </label>
                                <label>
                                    <input type="checkbox" name="connect_time[]" value="11:00 - 11:00">
                                    <div></div> 
                                    <p>11:00 - 14:00</p>
                                </label>
                                <label>
                                    <input type="checkbox" name="connect_time[]" value="14:00 - 18:00">
                                    <div></div>
                                    <p>14:00 - 18:00</p>
                                </label>
                                <label>
                                    <input type="checkbox" name="connect_time[]" value="18:00 - 21:00">
                                    <div></div>
                                    <p>18:00 - 21:00</p>
                                </label>
                            </div>
                        </div>   
                    </div>
                    <div class="form-block-text">
                    <div class="ok">
                        <label>
                            <input type="checkbox" name="ok">
                            <div></div>
                        </label>
                        <p>Я даю согласие на обработку персональных данных</p>
                    </div>
                        <input type="submit" value="отправить сообщение" class="sub:hover">
                    </div>
                </div>
            </form>
        </section>
    </main>
      
<!-- Блок footer -->
<?php
$adress = "Москва, Большая Спасская 12";
$email =  "moscow@imoscow.ru";
$phone_number = "8 (495) 626-46-00";
include ("modules/footer.php");
?>

<!-- Блок стрелка вверх -->
<?php include ("modules/arrow_up.php") ?>

<!-- Блок cooki -->
<!-- <?php include ("modules/cooki.php") ?> -->

<!-- Подключение скрипта для управления формой -->
<!-- <?php $script =  "script.js"  ?> -->

<script src="script/jquery.js"></script>
<script src="script.js"></script>    
</body>
</html>