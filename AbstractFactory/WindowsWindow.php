<?php

/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/23/16
 * Time: 10:34
 */
require_once 'IWindow.php';
class WindowsWindow implements IWindow {
    public function create() {
        echo "create windows btn\n";
    }
}