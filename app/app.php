<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR_."/../src/cd.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        $new_cd = new CD($_GET["title"], $_GET["artist"], $_GET["cover_art"], $_GET["price"]);
    });



    return $app;
?>
