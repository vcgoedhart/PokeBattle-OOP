<?php
class Attack
{
    private $name;
    private $damage;

    public function __construct($name, $damage)
    {
        $this->name = $name;
        $this->damage = $damage;
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
}
