<?php
/**
 * Class: csci330fa20
 * User: Justin Bartholomew
 * Date: 2/8/2021
 * Time: 6:52 PM
 */

class circle
{
    const SHAPE_TYPE = 3;

    protected double $radius;


    function __construct($radius) {
        $this->radius = $radius;

        parent:: construct(0,0);
    }

    public function area() {

        $area = ($this->radius * $this->radius) * pi();

        return area;

    }

    public function getFullDescription() {

        $fullDescr = "Circle " . $this->id . ": " . $this->name . " - " . $this->radius;

    }

}