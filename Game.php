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
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDeveloper(): string
    {
        return $this->developer;
    }

    /**
     * @param string $developer
     */
    public function setDeveloper(string $developer): void
    {
        $this->developer = $developer;
    }

    /**
     * @return string
     */
    public function getGenre(): string
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     */
    public function setGenre(string $genre): void
    {
        $this->genre = $genre;
    }

    /**
     * @return int
     */
    public function getMaxPlayers(): int
    {
        return $this->maxPlayers;
    }

    /**
     * @param int $maxPlayers
     */
    public function setMaxPlayers(int $maxPlayers): void
    {
        $this->maxPlayers = $maxPlayers;
    }

    /**
     * @return string
     */
    public function getImglink(): string
    {
        return $this->imglink;
    }

    /**
     * @param string $imglink
     */
    public function setImglink(string $imglink): void
    {
        $this->imglink = $imglink;
    }
}
