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
// ___________________________________________________________________________________________________________
    include ($_SERVER['DOCUMENT_ROOT'] . "/functions/db.php");
    include ($_SERVER['DOCUMENT_ROOT'] . "/functions/func_array.php");  
    
    $error = '';
    if ( !empty($_GET) ) {
        if ( !empty($_GET['search']) ) {
            $query = "SELECT * FROM `users` WHERE `email` LIKE '%{$_GET['search']}%' OR `name` LIKE '%{$_GET['search']}%' OR `phone` = '{$_GET['search']}'";
            $user_data = mysqli_query($db, $query);

            $template = [];

            while ( $row = mysqli_fetch_assoc($user_data) ) {
                $template['search'][] = $row;
            }
            // d($template);
        } else {
            $error = 'В search ничего не внесено.';
        }
    }

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
        $title_name3 = "-Поиск по клиентам-";
        $link_style_title_block = "../style/style_modules/title-block.css";
        include ($_SERVER['DOCUMENT_ROOT'] . "../modules/title-block.php");
        ?>
    </div>
    <!-- _____________________________________________________________________________________________________ -->
    <main>
        <div class=" contacts-block wrapper">
            <h2>Поиск по клиентам</h2>
            <?= $error ?>
            <form action="" method="GET">
                <input type="text" name="search" placeholder="Введите что нибудь">
                <input type="submit" value="Найти клиентов">
            </form>

            <?php if (!empty($_GET)): ?>        
                <h2>Результаты поиска</h2>
                <div class="table">
                    <?php if (isset($template['search']) && is_array($template['search'])) foreach ($template['search'] as $key => $value): ?>
                        <div class='table-row'>
                            <div class='table-cell'> <?= (++$key) ?> </div>
                            <div class='table-cell'> <?= $value['name'] ?> </div>
                            <div class='table-cell'> <?= $value['email'] ?> </div>
                            <div class='table-cell'> <?= $value['phone']?> </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

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


    
</body>
</html>