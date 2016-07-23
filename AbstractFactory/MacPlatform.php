<?php

/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/23/16
 * Time: 09:27
 */
require_once 'IPlatform.php';
require_once 'MacWindow.php';
require_once 'MacBtn.php';
class MacPlatform implements IPlatform {

    public function makeWindow() {
        return new MacWindow();
    }

    public function makeBtn() {
        return new MacBtn();
    }
}