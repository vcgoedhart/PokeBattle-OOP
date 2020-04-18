<?php
abstract class Pokemon
{
    private $name;

    private $maxHealth;
    private $health;

    protected $energyType;
    protected $resistance;
    protected $weakness;

    /**
     * Initialiser when an object is constructed.
     *
     * @param string $name - Name for the Pokémon.
     * @param int $maxHealth - Maximum health for the Pokémon to have.
     */
    public function __construct($name, $maxHealth)
    {
        $this->name = $name;

        $this->maxHealth = $maxHealth;
        $this->health = $maxHealth;
    }

    /**
     * Abstract function. Every child class requires to have this function.
     * Must return an array which includes the Attack class inside.
     *
     * @return array
     */
    abstract public function attacks(): array;

    public function attack(Pokemon $target, Attack $attack)
    {
    }

    /**
     * Gets property values without reading the 'get'
     * Ex: getName -> name
     *
     * @param string $propName - property name. first 3 letters are removed.
     */
    public function __get($propName)
    {
        $propName = strtolower(substr($propName, 3));

        if (property_exists($this, $propName)) {
            return $this->$propName;
        } else {
            echo "Property '$propName' does not exist.";
        }
    }
}
