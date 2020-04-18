<?php
class EnergyType
{
    private $type;

    public function __construct($type)
    {
        $this->type = $type;
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
