<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href= "<?php echo $google_fonts ?>" >
    <style>.burger-menu{display:none;position:fixed;width:40px;height:30px;right:5px;top:15px;-webkit-transition:0.3s all;transition:0.3s all;cursor:pointer}.menu-btn-stick{position:absolute;width:100%;height:5px;background:#f75540;border-radius:6px;-webkit-transition:0.2s all;transition:0.2s all}.menu-btn-stick:nth-child(2){top:0;bottom:0;margin:auto}.menu-btn-stick:nth-child(3){bottom:0}.menu-btn-stick-first{-webkit-transform:rotate(45deg);transform:rotate(45deg);-webkit-transform-origin:0 0;transform-origin:0 0;top:-3px}.menu-btn-stick-last{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 0;transform-origin:0 0;left:-3px}.menu-btn-stick-hover{background-color:orange}.toppanel{position:relative;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:20px;z-index:9999}.logo-name-block{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.logo{display:block;background:url(../images/icons/spasskaya-tower.png) center center/contain no-repeat;width:70px;height:70px;margin:0px 10px 0px 10px;-webkit-transition:0.2s all;transition:0.2s all}.logo:hover{-webkit-transform:scale(1.02);transform:scale(1.02)}.topname{color:#ffcc33;font-size:36px;font-family:"MV Boli";text-decoration:none;width:190px;-webkit-transition:0.3s all;transition:0.3s all}.topname:hover{color:white;-webkit-transform:scale(1.01);transform:scale(1.01)}.toppanel-nav{-webkit-box-sizing:border-box;box-sizing:border-box;padding:10px}.top-button{color:white;font-size:14.5px;text-decoration:none;margin:10px;line-height:25px;-webkit-transition:0.5s all;transition:0.5s all}.top-button:hover{color:#ffc155}h2{color:#709dca;text-align:center;text-transform:uppercase}@media (max-width: 1000px){.burger-menu{display:block;z-index:3}.toppanel{width:250px;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;position:fixed;background-color:rgba(39,72,102,0.911);right:10px;top:5px;margin-right:-260px;padding:70px 0px 30px 0px;border-radius:4px;z-index:2}.logo-name-block{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin:0px;padding:0px}.logo:hover{-webkit-transform:scale(1);transform:scale(1)}.topname:hover{-webkit-transform:scale(1);transform:scale(1)}.toppanel-nav{width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin:0px;padding:0px}.top-button{width:100%;height:40px;line-height:40px;text-align:center;font-size:25px;margin:5px 0px 0px 0px;padding:0px}.top-button:hover{background-color:orange;color:black}}</style>
    <title><?php echo $title ?></title>
</head>
<header class="wrapper">
    <div class="burger-menu">
        <div class="menu-btn-stick"></div>
        <div class="menu-btn-stick"></div>
        <div class="menu-btn-stick"></div>
    </div>
    <nav class="toppanel flex-wrap"> 
        <div class="logo-name-block">
            <a href="#" class="logo"></a>
            <a href="#" class="topname"><?php echo $top_name ?></a> 
        </div>
        <div class="toppanel-nav">
            <a href="../index.php" class="top-button"><?php echo $name1 ?></a>
            <a href="../php/trips.php" class="top-button"><?php echo $name2 ?></a>
            <a href="#company" class="top-button"><?php echo $name3 ?></a>
            <a href="../php/contacts.php" class="top-button"><?php echo $name4 ?></a>
            <a href="#rev" class="top-button"><?php echo $name5 ?></a>
        </div>
    </nav>
</header> 
