<?php
    class Movie {
        public $title;
        public $year;
        public $director;

        function __construct($_title, $_year, $_director) {
            $this->title = $_title;
            $this->year = $_year;
            $this->director = $_director;
        }

        public function getTitle() {
            return $this->title;
        }

        public function setTitle($new_title) {
            $this->title = $new_title;
        }

        public function getYear() {
            return $this->year;
        }

        public function setYear($new_year) {
            $this->year = $new_year;
        }

        public function getDirector() {
            return $this->director;
        }

        public function setDirector($new_director) {
            $this->director = $new_director;
        }
    };

    $movie_1 = new Movie('Star Wars', 1977, 'George Lucas');
    $movie_2 = new Movie('Citizen Kane', 1941, 'Orson Welles');

    echo '<h1> Primo film </h1>';
    echo 'Titolo: ' . $movie_1->getTitle() . '<br>';
    echo 'Anno di uscita: ' . $movie_1->getYear() . '<br>';
    echo 'Regista: ' . $movie_1->getDirector();

    echo '<h1> Secondo film </h1>';
    echo 'Titolo: ' . $movie_2->getTitle() . '<br>';
    echo 'Anno di uscita: ' . $movie_2->getYear() . '<br>';
    echo 'Regista: ' . $movie_2->getDirector();



?>
