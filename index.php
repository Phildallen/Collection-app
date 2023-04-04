<?php
require_once 'GameDao.php';

$gameDao = new GameDao();
    
$games = $gameDao->fetchAll();

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SNES game collection</title>

    <meta name="description" content="SNES game collection">
    <meta name="author" content="Phil ALlen">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" href="images/favicon.png" sizes="192x192">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">

</head>

<body>
    
<h1>My Super Nintendo Entertainment System (SNES) game collection</h1>

<section class="collection">

    <?php
    $html = '';
    foreach ($games as $game) {
        $html .= '<div class="game-card">'
            . '<h2>' . $game->getName() . '</h2>'
            . '<img src="' . $game->getImglink() . '" alt="' . $game->getName() . ' cart">'
            . '<p>Developed by ' . $game->getDeveloper() . '</p>'
            . '<p>Genre: ' . $game->getGenre() . '</p>'
            . '<p>Maxplayers: ' . $game->getMaxplayers() . '</p>'
            . '</div>';
    }
    echo $html;

    ?>

</section>



</body>
</html>