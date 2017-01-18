<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/cd.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        $cd1 = new CD("Master of Reality", "Black Sabbath", "http://puluche.com/assets/Black_Sabbath_-_Master_of_Reality.png", 10.99);
        $cd2 = new CD("Electric Ladyland", "Jimi Hendrix", "http://starling.rinet.ru/music/sleeves/zap_hendrix2.jpg", 10.99);
        $cd3 = new CD("Nevermind", "Nirvana", "http://store.acousticsounds.com/images/medium/CUNI_42384__94271__11272013102414-5875.jpg", 10.99);
        $cd4 = new CD("Back in Black", "ACDC", "http://images.popmatters.com/news_art/a/acdc_back_in_black.jpg", 49.99);
        $cds = array($cd1, $cd2, $cd3, $cd4);
          // an images folder would go inside of the web folder

        $output = "";  // an empty string
        foreach ($cds as $album) {  // As we loop through the array of CDs we add each of their elements to the string
          $output = $output . "<div class='row'>
              <div class='col-md-6'>
                  <img src=" . $album->getCoverArt() . ">
              </div>
              <div class='col-md-6'>
                  <p>" . $album->getTitle() . "</p>
                  <p>" . $album->getArtist() . "</p>
                  <p>" . $album->getPrice() . "</p>
              </div>
          </div>"; // We call each one's getter methods for title, artist, price, and image path properties.
        }

        return $output;  // $output is now the html comprised of all the CD elements

    });



    return $app;
?>
