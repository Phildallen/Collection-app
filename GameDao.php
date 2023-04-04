<?php
require_once 'db-connect.php';
require_once 'Game.php';

class GameDao
{
    private PDO $db;

    public function  __construct()
    {
        $this->db = connectToDb('gamecollection');
    }

    public function fetchAll(): array
    {
        $sql = 'SELECT `games`.`id`, `games`.`name`, `games`.`developer`, `games`.`genre`, `games`.`maxplayers`,
        `games`.`imglink`,`developer`.`developer`, `genre`.`genre`'
            . 'FROM `games`'
            . 'INNER JOIN `developer`'
            . 'ON `games`.`developer` = `developer`.`id`'
            . 'INNER JOIN `genre`'
            . 'ON `games`.`genre` = `genre`.`id`';

        $query = $this->db->prepare($sql);
        $query->execute();
        $rows = $query->fetchAll();

        $games = [];
        foreach ($rows as $row) {
        $game = new Game($row['name'], $row['developer'], $row['genre'], $row['maxplayers'], $row['imglink'], $row['id']);
        $games[] = $game;
        }

        return $games;
    }

    public function fetch(int $gameId): Game
    {
        $sql = 'SELECT `id`, `name`, `developer`, `maxplayers`, `imglink`'
        . 'FROM `games` '
        . 'WHERE `id` = :id; ';

        $values = [':id' => $gameId];

        $query = $this->db->prepare($sql);
        $query->execute($values);
        $game = $query->fetch();

        return new Game($game['name'], $game['developer'], $game['genre'], $game['maxplayers']
            ,$game['imglink'], $game['id']);
        }

    public function add(Game $game):int
    {
        $sql = 'INSERT INTO `games` (`name`, `developer`, `genre`, `maxplayers`, `imglink`) '
        . 'VALUES (:name, :developer, :genre, :maxplayers, :imglink); ';

        $values = [
            'name' => $game->getName(),
            'developer' => $game->getDeveloper(),
            'genre' => $game->getGenre(),
            'maxplayers' => $game->getMaxplayers(),
            'imglink' => $game->getImglink()
        ];

        $query = $this->db->prepare($sql);
        $query->execute($values);

        return $this->db->lastInsertId();

    }
}
