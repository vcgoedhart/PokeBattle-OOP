<?php

abstract class Pokemon
{
    private $name;

    private $maxHealth;
    private $health;

    protected $energyType;
    protected $resistance;
    protected $weakness;

    private $soep;

    private static $population;

    /**
     * Initialiser when an object is constructed.
     *
     * @param string $name - Name for the Pokémon.
     * @param int $maxHealth - Maximum health for the Pokémon to have.
     */
    public function __construct($name, $maxHealth, $energyType, $weakness, $resistance)
    {
        $this->name = $name;

        $this->maxHealth = $maxHealth;
        $this->health = $maxHealth;

        $this->energyType = $energyType;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

        self::$population++;
    }

    /**
     * Abstract function. Every child class requires to have this function.
     * Must return an array which includes the Attack class inside.
     *
     * @return array
     */
    abstract public function attacks(): array;

    /**
    * Attack function to attack another pokemon with. This function causes target to lose health.
    *
    * @param Pokemon $target - The target Pokémon who is going to receive damage.
    * @param Attack $attack - The attack which will be used against the target.
    */
    public function attack(Pokemon $target, Attack $attack)
    {
        $totalDamage = 0;

        /**
         * Attacker cannot attack if it hass less or equal than 0 health.
         */
        if ($this->health <= 0) return;

        /**
         * If target has any resistance against the EnergyType of this Attack. The damage reduces.
         */
        foreach ($target->resistance as $resist) {
            if ($this->energyType->type === $resist->energyType) {
                $totalDamage = $attack->damage - $resist->value;
            }
        }

        /**
         * If target has any weakness against the EnergyType of this attack. The damage gets amplified.
         */
        foreach ($target->weakness as $weak) {
            if ($this->energyType->type === $weak->energyType) {
                $totalDamage = $attack->damage * $weak->amplifier;
            }
        }

        $target->damage($totalDamage);
    }

    public function damage($value) 
    {
        $this->health -= $value;

        if ($this->health <= 0) {
            $this->health = 0;
            self::$population--;
        }
    }

    /**
     * Get property value
     *
     * @param string $propName - The property.
     */
    public function __get($propName)
    {
        if (property_exists($this, $propName)) {
            return $this->$propName;
        }
    }

    /**
     * Set a property value to another value
     *
     * @param string $propName - The property.
     * @param $value - The value for the property.
     */
    public function __set($propName, $value)
    {
        if (property_exists($this, $propName)) {
            $this->$propName = $value;
        }
    }

    /**
     * Get the alive Pokémon population
     *
     * @return int - Count of alive population
     */
    public static function getPopulation()
    {
        return self::$population;
    }
}