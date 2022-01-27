<?php
    class Movie {
        public $title;
        public $vote;

        function __construct($_title, $_vote) {
            $this->title = $_title;
            $this->vote = $_vote;
        }

        public function getVote() {
            return $this->vote = $_vote; 
        }

        public function generateRandomVote() {
            $randomVote = rand(0, 10);
            $this->vote = $randomVote;
        }
    }

    $Fast_and_Furious_10 = new Movie('Fast & Furious 10', 8.5);
    $Scream = new Movie('Scream',7.0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <div>
        Titolo: <?php echo $Fast_and_Furious_10->title ?> - Vote: <?php echo $Fast_and_Furious_10->vote ?>
    </div>

    <div>
        Titolo: <?php echo $Scream->title ?> - Vote: <?php echo $Scream->vote ?>
    </div>
</body>
</html>