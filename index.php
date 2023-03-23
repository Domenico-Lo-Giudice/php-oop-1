<?php

// Definizione della classe Movie
class Movie {
    public $title;
    public $director;
    public $year;

    // Definizione costruttore
    public function __construct(string $_title, string $_director, int $_year) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
    }

    // INZIO Definizione metodi getter
    public function getTitle() {
        return $this->title;
    }

    public function getDirector() {
        return $this->director;
    }

    public function getYear() {
        return $this->year;
    }
    // FINE Definizione metodi getter

    // INIZIO Definizione metodi setter
    public function setTitle($title) {
        if(!is_string($title) || $title === "") return false;
        $this->title = $title;
    }

    public function setDirector($director) {
        if(!is_string($director) || $director === "") return false;
        $this->director = $director;
    }

    public function setYear($year) {
        if(!is_numeric($year) || $year < 1800 || $year > date("Y")) return false;
        $this->year = $year;
    }
    // FINE Definizione metodi setter
}

// Istanza di 2 oggetti "Movie"
$movie1 = new Movie("Perfect Blue", "Satoshi Kon", 1998);
$movie2 = new Movie("Inception", "Christopher Nolan", 2010);

// Stampo a schermo i valori delle relative proprietà 
echo $movie1->getTitle() . " (" . $movie1->getYear() . ") - Directed by: " . $movie1->getDirector() . "<br>";
echo $movie2->getTitle() . " (" . $movie2->getYear() . ") - Directed by: " . $movie2->getDirector();

var_dump($movie1);
var_dump($movie2);
?>