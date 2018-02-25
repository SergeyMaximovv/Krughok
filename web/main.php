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

        echo ($_GET['page']);
        include '../app/views/pages/' . $_GET['page'] . '.php';
        
    } else {

        include '../app/views/pages/news.php';
    }
    // include '../pages/news.php';
}
echo '</section>';
