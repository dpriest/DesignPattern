<?php

/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/24/16
 * Time: 09:55
 */
require_once 'IShape.php';
require_once 'Rectangle.php';
class RectangleAdapter implements IShape{
    private $rectangle;
    public function __construct(LegacyRectangle $rectangle) {
        $ulx = $rectangle->x - $rectangle->w / 2;
        $uly = $rectangle->y + $rectangle->h / 2;
        $lrx = $rectangle->x + $rectangle->w / 2;
        $lry = $rectangle->y - $rectangle->h / 2;
        $this->rectangle = new Rectangle($ulx, $uly, $lrx, $lry);
    }

    public function display() {
        $this->rectangle->display();
    }
}