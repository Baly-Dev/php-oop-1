<?php
Class Movie {
    // attributes
    public $title;
    public $director;
    public $release_date;
    public $box_office;
    public $budget;

    // construct function
    public function __construct($title, $release_date, $director = null){
        $this->title = $title;
        $this->release_date = $release_date;
        $this->director = null;
    }

    public function getMovieIncome(){
        $income = number_format($this->box_office - $this->budget);
        return $income;
    }
}

// object initialization
$movie1 = new Movie('Interstellar', 2014, 'Chris Nolan');
$movie1->box_office = 701700000;
$movie1->budget = 165000000;

// object printig
echo '<b>' . $movie1->title . '</b>' . ' - ' . 'net income: ' . $movie1->getMovieIncome() . ' mln';