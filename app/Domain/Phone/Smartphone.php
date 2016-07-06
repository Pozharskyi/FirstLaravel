<?php


namespace App\Domain\Phone;


class Smartphone
{
    protected $name = 'Sony Xperia';
    protected $processor;
    protected $display;
    protected $camera;
    protected $battery;

    /**
     * Smartphone constructor.
     * @param $processor
     * @param $display
     * @param $camera
     * @param $battery
     */
    public function __construct(Processor $processor, Display $display, Camera $camera, Battery $battery)
    {
        $this->processor = $processor;
        $this->display = $display;
        $this->camera = $camera;
        $this->battery = $battery;
    }

    public function __toString()
    {
        return $this->name.', '.$this->processor.', '.$this->display.', '.$this->camera.', '.$this->battery;
    }
}