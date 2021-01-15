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

    $myMovie = new Movie('Star Wars', 1977, 'George Lucas');
    echo $myMovie->getTitle();
    $myMovie->setTitle('Star Wars - Episode IV');
    var_dump($myMovie);


?>
