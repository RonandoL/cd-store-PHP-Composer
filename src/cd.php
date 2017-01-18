<?php
    class CD
    {
        private $title;
        private $artist;
        private $cover_art;
        private $price;

        function __construct($album_name, $band_name, $image_path, $album_price = 10.99)
        {
            $this->title = $album_name;
            $this->artist = $band_name;
            $this->cover_art = $image_path;
            $this->price = $album_price;
        }

        // SETTER PRICE
        function setPrice($new_price)
        {
            $float_price = (float) $new_price;
            if ($float_price != 0) {
                $formatted_price = number_format($float_price, 2);
                $this->price = $formatted_price;
            }
        }

        // GRETTER PRICE
        function getPrice()
        {
          return $this->price;
        }

        // SETTER TITLE
        function setTitle($new_title) // Sets the value of the object's title
        {
            $this->title = $new_title;
        }

        // GETTER TITLE
        function getTitle()
        {
          return $this->title;
        }

        // SETTER ARTIST
        function setArtist ($new_artist)
        {
            $this->artist = $new_artist;
        }

        // GETTER ARTIST
        function getArtist()
        {
            return $this->artist;
        }

        // SETTER COVER ART
        function setCoverArt($new_cover_art)
        {
            $this->cover_art = $new_cover_art;
        }

        // GETTER COVER ART
        function getCoverArt()
        {
            return $this->cover_art;
        }


    }



?>
