<?php

// Definizione della classe Movie
class Movie {
    public $title;
    public $director;
    public $year;

    // Definizione costruttore
    public function __construct($title, $director, $year) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

}


?>