<?php

/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/23/16
 * Time: 10:34
 */
require_once 'IWindow.php';
class MacWindow implements IWindow {
    public function create() {
        echo "cretae mac window\n";
    }
}