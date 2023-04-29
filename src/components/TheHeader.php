<?php 

$header = "FortNoks Club";


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/header.css">
    <link rel="stylesheet" href="src/styles/index.css">
    <link rel="stylesheet" href="src/styles/media.css">
    <link rel="stylesheet" href="src/styles/default.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
    <title><?= $header ?></title>
</head>
<body>
    <div class="wrapper">
<header class="header">
    <div class="header--container">
                <div class="top">
                    <div class="start">
                        <div class="logo">
                            <?php include 'src/icons/HeaderIcon.php' ?>
                        </div>
                    </div>
                    <div class="end">
                        <ul class="links">
                            <li class="link">Комплексы</li>
                            <li class="link">Услуги</li>
                            <li class="link">Вторичка</li>
                            <li class="link">Аренда</li>
                            <li class="link">Контакты</li>
                        </ul>
                        <input type="tel" disabled value="+380 97 343 78 23" class="phone">
                        <select class="lang">
                            <option value="ru">RU</option>
                            <option value="ua">UA</option>
                        </select>
                        <button class="burger-menu">
                                <span id="burgerOpen" class="mdi mdi-menu"></span>
                                <span id="burgerClose" class="mdi mdi-backburger hidden"></span>
                        </button>
                    </div>
                    <div class="phoneMenu">
                        <ul>
                            <li>Комплексы</li>
                            <li>Услуги</li>
                            <li>Вторичка</li>
                            <li>Аренда</li>
                            <li>Контакты</li>
                        </ul>
                        <small>+380 97 343 78 23</small>
                        <select name="lang" class="lang">
                            <option value="ru">ru</option>
                            <option value="ua">ua</option>
                        </select>
                    </div>
                </div>
            </div>
</header>