<?php

namespace App\Domain\Phone;
class Camera
{
    protected $mpixels = 12;
    public function __toString()
    {
        return $this->mpixels.' megapixels camera';
    }
}