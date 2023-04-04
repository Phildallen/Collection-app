<?php

require_once 'GameDao.php';
require_once 'Game.php';

//fetchAll defined on PigDao.php
$gameDao = new GameDao();

$games = $gameDao->fetchAll();

echo '<pre>';
print_r($games);
echo '</pre>';
