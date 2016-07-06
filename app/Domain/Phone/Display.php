<?php

namespace App\Domain\Phone;
class Display
{
    protected $resolution = '480x320';
    public function __toString()
    {
        return $this->resolution.' display';
    }
}