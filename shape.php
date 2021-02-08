<?php
/**
 * Class: csci330fa20
 * User: Justin Bartholomew
 * Date: 2/8/2021
 * Time: 5:25 PM
 */

class shape
{
    const SHAPE_TYPE = 1;
    public String $name;
    protected double $length;
    protected double $width;
    private int $id;


    function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
        $id = uniqid();
    }

    function getName() {
        return $this->name;
    }

    function setName($x) {
        $this->name = $x;
    }

    function getId() {
        return $this->id;
    }

    function area() {

        $area = $this->length * $this->width;

        return area;

    }

    public static function getTypeDescription() {

        $descr = "Type: " + static::SHAPE_TYPE;

        return descr;

    }

    public function getFullDescription() {

        $fullDescr = "Shape: " + static::SHAPE_TYPE + ": " + $this->name + " - " + $this->length + " + " + $this->width;

    }

}