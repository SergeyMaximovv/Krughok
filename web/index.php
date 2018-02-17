<!DOCTYPE html>

<html>
    <head>
        <link href = "css/style.css" type = 'text/css' rel='stylesheet'>

        <meta charset="UTF-8">
        <title>ИС "Кружок"</title>
    </head>  
    <body>

        <?php
        define('DEVELOP', true);
//
        define('Krughok_Web', realpath(__DIR__ . '/../app') . '/');
//        // use krughok\core\Router;
//        // put your code here
//        // require_once __DIR__ . "/../vendor/autoload.php";
//
        require_once __DIR__ . "/../vendor/krughok/core/Loader.php";
//
        $loader = new \krughok\core\Loader();
        
        spl_autoload_register([$loader, 'loadClass']);
//      
//          //\krughok\core\App::start();
//
        $router = new \krughok\core\Router();
//
        require '../app/views/header.php';
//
        $router->start();
        require 'main.php';
    
        require '../app/views/footer.php';
        ?>
    </body>
</html>
