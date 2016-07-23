<?php

/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/23/16
 * Time: 10:34
 */
require_once 'IBtn.php';
class MacBtn implements IBtn {
    public function draw() {
        echo "draw mac btn\n";
    }
}