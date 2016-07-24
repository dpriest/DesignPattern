<?php

/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/24/16
 * Time: 17:08
 */
require_once 'IpageDirector.php';
require_once 'IPageBuilder.php';
class HTMLPageDirector implements IpageDirector{

    private $builder;

    public function __construct(IPageBuilder $builder) {
        $this->builder = $builder;
    }

    public function buildPage() {
        $this->builder->setTitle('Testing the HTMLPage');
        $this->builder->setHeading('Testing the HTMLPage');
        $this->builder->setText('Testing, testing, testing!');
        $this->builder->setText('Testing, testing, testing, or!');
        $this->builder->setText('Testing, testing, testing, more!');
        $this->builder->formatPage();
    }

    public function getPage() {
        return $this->builder->getPage();
    }
}