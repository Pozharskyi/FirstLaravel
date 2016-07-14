<?php

namespace App\Domain\Phone;
class Display
{
    protected $resolution = '480x320';

    /**
     * Display constructor.
     * @param string $resolution
     */
    public function __construct($resolution)
    {
        $this->resolution = $resolution;
    }

    /**
     * @return string
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * @param string $resolution
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
    }

    public function __toString()
    {
        return $this->resolution.' display';
    }
}