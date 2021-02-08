<?php
/**
 * Class: csci330fa20
 * User: Justin Bartholomew
 * Date: 2/8/2021
 * Time: 6:12 PM
 */

class rectangle extends shape
{

    const SHAPE_TYPE = 2;

    public function getFullDescription() {

        $fullDescr = "Rectangle: " . $this->getId() . ": " . $this->name . " - " . $this->length . " + " . $this->width;

    }

}