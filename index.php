<?php
    class Movie {
        public $title;
        public $year;
        public $director;
    };

    $myMovie = new Movie();
    $myMovie->title = 'Star Wars';
    var_dump($myMovie);
    echo $myMovie->title;
?>
