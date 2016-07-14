<?php

namespace App\Domain\Phone;
class Camera
{
    protected $mpixels = 12;

    /**
     * Camera constructor.
     * @param int $mpixels
     */
    public function __construct($mpixels)
    {
        $this->mpixels = $mpixels;
    }

    /**
     * @return int
     */
    public function getMpixels()
    {
        return $this->mpixels;
    }

    /**
     * @param int $mpixels
     */
    public function setMpixels($mpixels)
    {
        $this->mpixels = $mpixels;
    }

    public function __toString()
    {
        return $this->mpixels.' megapixels camera';
    }
}