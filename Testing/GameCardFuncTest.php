<?php

require_once 'gamecardfunc.php';

use PHPUnit\Framework\TestCase;

class GameCardFuncTest extends TestCase
{
    public function testGameCard()
    {
        $expected = '<div class="game-card"><h2>Super Mario All Stars</h2><img src="images/IMG_supermarallstrs.png" alt="Super Mario All Stars cart"><p>Developed by Nintendo</p><p>Genre: Platformer</p><p>Maximum no. players: 2</p></div><div class="game-card"><h2>Donkey Kong Country</h2><img src="images/IMG_donkeykong.png" alt="Donkey Kong Country cart"><p>Developed by Rare</p><p>Genre: Platformer</p><p>Maximum no. players: 2</p></div><div class="game-card"><h2>Super Mario World</h2><img src="images/IMG_supermarwrld.png" alt="Super Mario World cart"><p>Developed by Nintendo</p><p>Genre: Platformer</p><p>Maximum no. players: 2</p></div><div class="game-card"><h2>Street Figher 2</h2><img src="images/IMG_streetfighter2.png" alt="Street Figher 2 cart"><p>Developed by Capcom</p><p>Genre: Fighting</p><p>Maximum no. players: 2</p></div><div class="game-card"><h2>Killer Instinct</h2><img src="images/IMG_killerinstinct.png" alt="Killer Instinct cart"><p>Developed by Rare</p><p>Genre: Fighting</p><p>Maximum no. players: 2</p></div><div class="game-card"><h2>Lemmings 2 Tribes</h2><img src="images/IMG_lemmings2.png" alt="Lemmings 2 Tribes cart"><p>Developed by Psygnosis</p><p>Genre: Puzzle</p><p>Single Player</p></div><div class="game-card"><h2>Hebereke's Popoon</h2><img src="images/IMG_heberekespopoon.png" alt="Hebereke's Popoon cart"><p>Developed by Sunsoft</p><p>Genre: Puzzle</p><p>Maximum no. players: 2</p></div><div class="game-card"><h2>Mario Is Missing</h2><img src="images/IMG_marioismissing.png" alt="Mario Is Missing cart"><p>Developed by Nintendo</p><p>Genre: Puzzle</p><p>Single Player</p></div><div class="game-card"><h2>F-Zero </h2><img src="images/IMG_fzero.png" alt="F-Zero  cart"><p>Developed by Nintendo</p><p>Genre: Racing</p><p>Maximum no. players: 2</p></div><div class="game-card"><h2>The Legend of Zelda: A Link to the Past</h2><img src="images/IMG_ledgezelda.png" alt="The Legend of Zelda: A Link to the Past cart"><p>Developed by Nintendo</p><p>Genre: RPG</p><p>Single Player</p></div><div class="game-card"><h2>Starwing</h2><img src="images/IMG_starwing.png" alt="Starwing cart"><p>Developed by Nintendo</p><p>Genre: Shooter</p><p>Single Player</p></div><div class="game-card"><h2>Alien 3</h2><img src="images/IMG_alien3.png" alt="Alien 3 cart"><p>Developed by Probe Software</p><p>Genre: Shooter</p><p>Single Player</p></div><div class="game-card"><h2>Super Probotector: Alien Rebels</h2><img src="images/IMG_probotector.png" alt="Super Probotector: Alien Rebels cart"><p>Developed by Konami</p><p>Genre: Shooter</p><p>Maximum no. players: 2</p></div><div class="game-card"><h2>Syndicate</h2><img src="images/IMG_syndicate.png" alt="Syndicate cart"><p>Developed by Bullfrog</p><p>Genre: Shooter</p><p>Single Player</p></div><div class="game-card"><h2>Worms</h2><img src="images/IMG_worms.png" alt="Worms cart"><p>Developed by Team17</p><p>Genre: Strategy</p><p>Maximum no. players: 4</p></div>';
        $result = gameCard();
//        $this->assertEquals($expected, $result);
        $this->assertRegexp('/' . preg_quote($expected) . '/', $result);
    }

}
