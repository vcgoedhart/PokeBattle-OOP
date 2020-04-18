<?php
class Charmeleon extends Pokemon
{
    public function __construct($name, $maxHealth)
    {
        parent::__construct($name, $maxHealth);

        $this->energyType = array(
            "fire" => new EnergyType("fire")
        );
        $this->weakness = array(
            "water" => new Weakness("water", 2.0),
        );
        $this->resistance = array(
            "electric" => new Resistance("electric", 10),
        );
    }

    public function attacks(): array
    {
        return array(
            "Flare" => new Attack("Flare", 30),
            "Headbutt" => new Attack("Headbutt", 10)
        );
    }
}
