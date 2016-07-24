<?php

/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/24/16
 * Time: 09:45
 */
class LegacyRectangle {
    private $x;
    private $y;
    private $w;
    private $h;

    public function __construct($middleX, $middleY, $width, $length) {
        $this->x = $middleX;
        $this->y = $middleY;
        $this->w = $width;
        $this->h = $length;
    }

    public function __get($name) {
        if (isset($this->$name)) {
            return $this->$name;
        }
        return null;
    }
}