<?php

class game
{
    private int $id;
    private string $name;
    private string $developer;
    private string $genre;
    private int $maxPlayers;
    private string $imglink;

    public function __construct(
        string $name, string $developer, string $genre, int $maxPlayers, string $imglink, int $id = -1
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->developer = $developer;
        $this->genre = $genre;
        $this->maxPlayers = $maxPlayers;
        $this->imglink = $imglink;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDeveloper(): string
    {
        return $this->developer;
    }


    /**
     * @return string
     */
    public function getGenre(): string
    {
        return $this->genre;
    }

    /**
     * @return int
     */
    public function getMaxPlayers(): int
    {
        return $this->maxPlayers;
    }


    /**
     * @return string
     */
    public function getImglink(): string
    {
        return $this->imglink;
    }
}
