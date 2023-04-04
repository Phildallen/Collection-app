<?php
require_once 'GameDao.php';

function gameCard()
{
    $gameDao = new GameDao();
    $games = $gameDao->fetchAll();
    $card = "";
    foreach ($games as $game) {
        if ($game->getMaxplayers() == 1) {
            $card .= '<div class="game-card">'
                . '<h2>' . $game->getName() . '</h2>'
                . '<img src="' . $game->getImglink() . '" alt="' . $game->getName() . ' cart">'
                . '<p>Developed by ' . $game->getDeveloper() . '</p>'
                . '<p>Genre: ' . $game->getGenre() . '</p>'
                . '<p>Single Player</p>'
                . '</div>';
        }
        else {
            $card .= '<div class="game-card">'
                . '<h2>' . $game->getName() . '</h2>'
                . '<img src="' . $game->getImglink() . '" alt="' . $game->getName() . ' cart">'
                . '<p>Developed by ' . $game->getDeveloper() . '</p>'
                . '<p>Genre: ' . $game->getGenre() . '</p>'
                . '<p>Maximum no. players: ' . $game->getMaxplayers() . '</p>'
                . '</div>';
        }
    }
    return $card;
}
