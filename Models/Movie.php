<?php 
class Movie
{
    public $title;
    public $description;
    public $vote;
    public $genre;

    public function __construct($tit, $descr, $vote, $gen)
    {
        $this->title = $tit;
        $this->description = $descr;
        $this->vote = $vote;
        $this->genre = $gen;
    }

    public function getMovieDet($par)
    {
        return $par;
    }
}
