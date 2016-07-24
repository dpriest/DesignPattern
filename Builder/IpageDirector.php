<?php

/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/24/16
 * Time: 16:57
 */
interface IpageDirector {
    public function __construct(IPageBuilder $builder);
    public function buildPage();
    public function getPage();
}