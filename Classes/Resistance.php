<?php
class Resistance
{
    private $energyType;
    private $value;

    public function __construct($energyType, $value)
    {
        $this->energyType = $energyType;
        $this->value = $value;
    }
}
