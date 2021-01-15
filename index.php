<?php
    class Movie {
        public $title;
        public $year;
        public $director;

        function __construct($_title = 'sconosciuto', $_year = 'sconosciuto', $_director = 'sconosciuto') {
            $this->title = $_title;
            is_numeric($_year) && $_year>1850 ? $this->year = $_year : $this->year = 'sconosciuto';
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
            if(is_numeric($new_year) && $new_year>1850) {
                $this->year = $new_year;
            }
        }

        public function getDirector() {
            return $this->director;
        }

        public function setDirector($new_director) {
            $this->director = $new_director;
        }

        public function printProperties() {
            echo 'Titolo: ' . $this->getTitle() . '<br>';
            echo 'Anno di uscita: ' . $this->getYear() . '<br>';
            echo 'Regista: ' . $this->getDirector();
        }
    };

    $movie_1 = new Movie('Star Wars', 1977, 'George Lucas');
    $movie_2 = new Movie('Citizen Kane', 1941, 'Orson Welles');

    echo '<h1> Primo film </h1>';
    $movie_1->printProperties();

    echo '<h1> Secondo film </h1>';
    $movie_2->printProperties();



?>
