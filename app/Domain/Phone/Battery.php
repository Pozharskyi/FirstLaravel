<?php

namespace App\Domain\Phone;
class Battery
{
    protected $capacity = 1234;
    public function __toString()
    {
        return 'Battery capacity '.$this->capacity.' mAh ';
    }
}