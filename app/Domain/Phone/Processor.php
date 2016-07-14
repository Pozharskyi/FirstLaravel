<?php

namespace App\Domain\Phone;
class Processor
{
    protected $vendor = 'Qualcomm 5555';
    protected $core = 4;

    /**
     * Processor constructor.
     * @param string $vendor
     * @param int $core
     */
    public function __construct($vendor, $core)
    {
        $this->vendor = $vendor;
        $this->core = $core;
    }

    /**
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param string $vendor
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
    }

    /**
     * @return int
     */
    public function getCore()
    {
        return $this->core;
    }

    /**
     * @param int $core
     */
    public function setCore($core)
    {
        $this->core = $core;
    }

    public function __toString()
    {
        return $this->vendor.' '.$this->core.' cores';
    }
}