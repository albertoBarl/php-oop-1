<?php
class Movie{
    public $title;
    public $description;
    public $vote;
    public $genre;

    function __construct($tit, $descr, $vote, $gen){
        $this -> title = $tit;
        $this -> description = $descr;
        $this -> vote = $vote;
        $this -> genre = $gen;
    }

}

// films
$movie1 = new Movie("Pierino", "la storia italiana", "6", ["comedy", "animation"]);
$movie2 = new Movie("Pippo", "alla ricerca di pluto", "6", ["animation"]);
$movie3 = new Movie("Topolino", "a casa con Minnie", "6", ["hentai"]);

$movies= [$movie1, $movie2, $movie3] 

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
<body>
    <ul class="list-unstyled">
    <?php foreach($movies as $item){ ?>
        <li class="card">
            <h3><?php echo $item->title ?></h3>
            <p><?php echo $item->description ?></p>
            <p><?php echo $item->vote ?></p>
            <p><?php foreach($item -> genre as $generi){ ?>
                <?php echo $generi ?>
            <?php } ?>
            </p>
        </li>
    <?php } ?>
    </ul>
</body>
</html>