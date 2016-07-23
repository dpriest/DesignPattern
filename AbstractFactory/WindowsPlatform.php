<?php

/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/23/16
 * Time: 09:26
 */
require_once 'IPlatform.php';
require_once 'WindowsWindow.php';
require_once 'WindowsBtn.php';
class WindowsPlatform implements IPlatform {

    public function makeWindow() {
        return new WindowsWindow();
    }

    public function makeBtn() {
        return new WindowsBtn();
    }
}