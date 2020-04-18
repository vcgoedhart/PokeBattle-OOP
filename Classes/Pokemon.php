<?php
class Pokemon
{
    private $name;

    private $maxHealth;
    private $health;

    protected $energyType;
    protected $resistance;
    protected $weakness;

    public function __construct($name, $maxHealth)
    {
        $this->name = $name;

        $this->maxHealth = $maxHealth;
        $this->health = $maxHealth;
    }
}
