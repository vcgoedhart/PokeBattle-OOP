<?php

class Charmeleon extends Pokemon
{
    public function __construct($name, $maxHealth)
    {
        $energyType = new EnergyType("fire");
        $weakness = array(
            "water" => new Weakness("water", 2.0),
        );
        $resistance = array(
            "electric" => new Resistance("electric", 10),
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
            "Flare" => new Attack("Flare", 30),
            "Headbutt" => new Attack("Headbutt", 10)
        );
    }
}
