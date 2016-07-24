<?php
/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/24/16
 * Time: 17:12
 */
require_once 'HTMLPageBuilder.php';
require_once 'HTMLPageDirector.php';
$builder = new HTMLPageBuilder();
$director = new HTMLPageDirector($builder);
$director->buildPage();
echo $director->getPage()->showPage();