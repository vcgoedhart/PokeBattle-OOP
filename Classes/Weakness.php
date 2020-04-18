<?php
class Weakness
{
    public $energyType;
    public $amplifier;

    public function __construct($energyType, $amplifier)
    {
        $this->energyType = $energyType;
        $this->amplifier = $amplifier;
    }
}
