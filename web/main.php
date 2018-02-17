<?php

//<h1 style='margin: 0;'>Главная</h1>
$themerefferens = [
    'differnts', //ТРУДОЕМКОСТЬ  
    'news', //НОВОСТИ
    'project', //
    'components',
    'differents',
    'targets',
    'project_IS',
    'FM_IS',
    're',
    'index'];
echo '<section class="main1">';


if (isset($_GET['page'])) {

    if (in_array($_GET['page'], $themerefferens)) {

        include '../pages/' . $_GET['page'] . '.php';
    } else {

        include '../pages/news.php';
    }
    // include '../pages/news.php';
}
echo '</section>';
