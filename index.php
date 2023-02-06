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

// films
$movie1 = new Movie("Pierino", "la storia italiana", "5", ["comedy", "animation"]);
$movie2 = new Movie("Pippo", "alla ricerca di pluto", "3", ["animation"]);
$movie3 = new Movie("Topolino", "a casa con Minnie", "2", ["hentai"]);

$movies = [$movie1, $movie2, $movie3]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


</head>

<body class="bg-dark">
    <ul class="list-unstyled">
        <?php foreach ($movies as $item) { ?>
            <li class="card m-3 p-3" style="width: 200px;">
                <h3><?php echo $item->getMovieDet($item->title) ?></h3>
                <p><?php echo $item->getMovieDet($item->description) ?></p>
                <p><?php echo $item->getMovieDet($item->vote) ?></p>
                <ul class="list-unstyled">
                    <?php foreach ($item->genre as $generi) { ?>
                        <li>- <?php echo $item->getMovieDet($generi) ?></li>
                    <?php } ?>
                </ul>

            </li>
        <?php } ?>
    </ul>
</body>

</html>