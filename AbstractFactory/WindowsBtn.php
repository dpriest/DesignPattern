<?php

/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/23/16
 * Time: 10:34
 */
require_once 'IBtn.php';
class WindowsBtn implements IBtn {
    public function draw() {
        echo "draw windows btn\n";
    }
}