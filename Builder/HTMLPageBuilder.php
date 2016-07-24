<?php

/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/24/16
 * Time: 16:58
 */
require_once 'IPageBuilder.php';
require_once 'HTMLPage.php';
class HTMLPageBuilder implements IPageBuilder {
    private $page = NULL;

    public function __construct() {
        $this->page = new HTMLPage();
    }

    public function formatPage() {
        $this->page->formatPage();
    }

    public function setHeading($heading) {
        $this->page->setHeading($heading);
    }

    public function setText($text) {
        $this->page->setText($text);
    }

    public function setTitle($title) {
        $this->page->setTitle($title);
    }

    public function getPage() {
        return $this->page;
    }
}