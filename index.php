<?php
// Movie Class
class Movie {
    // ATTRIBUTES
	public $title;
	public $director;
	public $year;
	public $genre;
	public $vote;

    /**
     * Class Constructor
     */
	function __construct($_title, $_director, $_year, $_genre = 'Not Specified'){
		$this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genre = $_genre;
	}

    // FUNCTIONS
    // Set Functions
    /**
     * Set Vote
     */
    public function setVote($vote){
        $this->vote = $vote;
    }

    // Get Functions
    /**
     * Return Director
     */
    public function getDirector(){
        return $this->director;
    }
    /**
     * Return Year
     */
    public function getYear(){
        return $this->year;
    }
    /**
     * Return Genre
     */
    public function getGenre(){
        return $this->genre;
    }
    /**
     * Return Vote
     */
    public function getVote(){
        return $this->vote;
    }
}

// Instance 1
$movie1 = new Movie('Die Hard', 'John McTiernan', '1988');
var_dump($movie1);

// Instance 2
$movie2 = new Movie('The Matrix', 'Andy & Larry Wachowski', '1999', 'sci-fi, action');
var_dump($movie2);

// Instance 3
$movie3 = new Movie('Lucky Number Slevin', 'Paul McGuigan', '2006');
var_dump($movie3);

// Set vote by method
$movie1->setVote(8);
$movie2->setVote(10);
$movie3->setVote(9);

// Set Genre directly for $movie1
$movie1->genre = 'action';

// Print $movie1
echo '<h2>' . $movie1->title . '</h2>' .
     '<h3>' . $movie1->getDirector() . '</h3>' .
     '<h3>' . $movie1->getYear() . '</h3>' .
     '<h4>' . $movie1->getGenre() . '</h4>' .
     '<h4>' . $movie1->getVote() . '</h4><br>';

// Print $movie2
echo '<h2>' . $movie2->title . '</h2>' .
     '<h3>' . $movie2->getDirector() . '</h3>' .
     '<h3>' . $movie2->getYear() . '</h3>' .
     '<h4>' . $movie2->getGenre() . '</h4>' .
     '<h4>' . $movie2->getVote() . '</h4><br>';

// Print $movie3 with foreach
echo '<dl>';
foreach($movie3 as $key => $value){
    echo '<dt>' . $key . '</dt><dd>' . $value . '</dd>';
}
echo '</dl>';