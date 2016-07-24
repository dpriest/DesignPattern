<?php

/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/24/16
 * Time: 09:39
 */
require_once 'IShape.php';
class Rectangle implements IShape{
    private $ulx;
    private $uly;
    private $lrx;
    private $lry;

    public function __construct($upperLeftX, $upperLeftY, $lowerRightX, $lowerRightY) {
        $this->ulx = $upperLeftX;
        $this->uly = $upperLeftY;
        $this->lrx = $lowerRightX;
        $this->lry = $lowerRightY;
    }

    public function display() {
        echo "draw ({$this->ulx}, {$this->uly}), ({$this->lrx}, {$this->lry})\n";
    }
}