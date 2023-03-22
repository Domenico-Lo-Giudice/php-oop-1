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
        $this->title = $title;
    }

    public function setDirector($director) {
        $this->director = $director;
    }

    public function setYear($year) {
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

?>