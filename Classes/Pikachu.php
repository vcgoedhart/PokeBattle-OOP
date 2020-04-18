<?php
class Pikachu extends Pokemon
{
    public function __construct($name, $maxHealth)
    {
        parent::__construct($name, $maxHealth);

        $this->energyType = array(
            "electric" => new EnergyType("electric")
        );
        $this->weakness = array(
            "fire" => new Weakness("fire", 1.5),
        );
        $this->resistance = array(
            "fighting" => new Resistance("fighting", 20),
        );
    }

    public function attacks(): array
    {
        return array(
            "Electric Ring" => new Attack("Electric Ring", 50),
            "Pika Punch" => new Attack("Pika Punch", 20)
        );
    }
}
