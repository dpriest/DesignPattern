<?php

/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/23/16
 * Time: 10:33
 */
require_once '../AbstractFactory/WindowsPlatform.php';
require_once '../AbstractFactory/MacPlatform.php';
class Window {
    private $os;
    public function __construct($type) {
        if ($type == 'windows') {
            $this->os = new WindowsPlatform();
        } elseif ($type == 'mac') {
            $this->os = new MacPlatform();
        } else {
            throw new Exception('what r u doing');
        }
    }

    public function makeWindow() {
        return $this->os->makeWindow();
    }

    public function makeBtn() {
        return $this->os->makeBtn();
    }
}