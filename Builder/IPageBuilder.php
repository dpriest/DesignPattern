<?php

/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/24/16
 * Time: 16:56
 */
interface IPageBuilder {
    public function getPage();
    public function setTitle($title);
    public function setHeading($heading);
    public function setText($text);
    public function formatPage();
}