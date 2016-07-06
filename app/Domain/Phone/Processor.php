<?php

namespace App\Domain\Phone;
class Processor
{
    protected $vendor = 'Qualcomm 5555';
    protected $core = 4;
    public function __toString()
    {
        return $this->vendor.' '.$this->core.' cores';
    }
}