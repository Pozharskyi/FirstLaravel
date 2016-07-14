<?php

namespace App\Domain\Phone;
class Battery
{
    protected $capacity = 1234;

    /**
     * Battery constructor.
     * @param int $capacity
     */
    public function __construct($capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @return int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    public function __toString()
    {
        return 'Battery capacity '.$this->capacity.' mAh ';
    }
}