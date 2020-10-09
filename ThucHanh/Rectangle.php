<?php

include_once ('Shape.php');

class Rectangle extends Shape
{
    public $width;
    public $height;


    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function calculateArea()
    {
        return $this->width * $this->height;
    }

    /**
     * @return mixed
     */
    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }


}