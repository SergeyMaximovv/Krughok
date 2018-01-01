<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href = "../css/style.css" type = 'text/css' rel='stylesheet'>

        <meta charset="UTF-8">
        <title>ИС "Кружок"</title>
    </head>  
    <body>

        <?php
        ///use msv\core\Router;
        // put your code here
        require "../vendor/msv/core/Loader.php";
        
        $loader = new \msv\core\Loader();

        spl_autoload_register( [$loader, 'loadClass']);
        
        $router = new \msv\core\Router();
        $router->start();

        require 'header.php';
        require 'main.php';
        require 'footer.php';       
        ?>
    </body>
</html>
