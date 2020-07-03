<?php

class Pikachu extends Pokemon
{
    public function __construct($name, $maxHealth)
    {
        $energyType = new EnergyType("electric");
        $weakness = array(
            "fire" => new Weakness("fire", 1.5),
        );
        $resistance = array(
            "fighting" => new Resistance("fighting", 20),
        );

        parent::__construct($name, $maxHealth, $energyType, $weakness, $resistance);
    }

    /**
     * Array that possesses the Pokémon's attacking names and attacking power
     *
     * @return array
     */
    public function attacks(): array
    {
        return array(
            "Electric Ring" => new Attack("Electric Ring", 50),
            "Pika Punch" => new Attack("Pika Punch", 20)
        );
    }
}
