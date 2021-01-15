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
    };


?>
