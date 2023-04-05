<?php

require_once 'gamecardfunc.php';
require_once '../Game.php';

use PHPUnit\Framework\TestCase;

class GameCardFuncTest extends TestCase
{
    public function testGameCard()
    {
        $expected = '<div class="game-card"><h2>F Zero</h2><img src="images/IMG_fzero.png" alt="F Zero cart"><p>Developed by Nintendo</p><p>Genre: Racing</p><p>Single Player</p></div>';
        $games = [new Game('F Zero','Nintendo','Racing',1,'images/IMG_fzero.png',6)];
        $result = gameCard($games);
        $this->assertEquals($expected, $result);
    }

}
