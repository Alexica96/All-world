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
    $date = date('Y-d-m-h');
    include ($_SERVER['DOCUMENT_ROOT'] . "/modules/head_header.php"); 
?>
<!-- ___________________________________________________________________________________________________________ -->
<!-- Подключение стилей "Формы" -->
<link rel="stylesheet" href="\style\style_handlers\style_form.css">
<!-- _________________________________________________________________________________ -->

<body class="background">
    <main>
        <div class="form-img">
            <div class="form-block">
            <div class="cur-time"> Сегодня<?$date?></div>
            <h3> Здравствуйте  <?php echo $_POST['name'] ?> ,спасибо за Ваше письмо. Мы будем рады Вам ответить в ближайшее время. </h3>
            <div class="form-info-block">

                <div> 
                    <?php
                        include ($_SERVER['DOCUMENT_ROOT'] . "/functions/func_array.php");

                        echo 'Супер! Вот данные, которые ты отправил : <br> ';
                        d($_POST); 
                                            
                    ?>
                </div>
                <div>
                    <?php

                        $db = mysqli_connect('localhost', 'root', '', '02112018_tomin');
                        mysqli_set_charset($db, 'utf8');
                                            
                        
                        $get_user = mysqli_query($db, "SELECT `email` FROM `users` WHERE `email` = '{$_POST['email']}'");

                        $c = (isset($_POST['connect_time'])) ? implode(',' ,$_POST['connect_time']) : '';
                        
                        if (mysqli_num_rows($get_user) == 0) {
                            $result = mysqli_query($db, "INSERT INTO `users` (`name`, `email`, `phone`) 
                                            VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['phone']}');");

                            $result_leads = mysqli_query($db, "INSERT INTO `leads`(`email`, `type_connect`, `office_city`, `connect_time`, `message`) 
                                                                VALUES ('{$_POST['email']}','{$_POST['connect']}','{$_POST['city']}','$c','{$_POST['message']}');");
                            
                        
                            if(!$result){
                                echo 'Данные не добавлены. Попробуйте еще раз!';

                            } else{
                                echo 'Данные добавлены!';
                            }
                        } else{
                            echo 'Такой пользователь уже существует.';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>
 <!-- _____________________________________________________________________________________________________    -->
<!-- Блок footer -->
<?php
$adress = "Москва, Большая Спасская 12";
$email =  "moscow@imoscow.ru";
$phone_number = "8 (495) 626-46-00";
include ( $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php");
?>
        
<script src="../script/jquery.js"></script>
<script src="../script/script_form.js"></script>
   
</body>

