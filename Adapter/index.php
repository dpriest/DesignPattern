<?php
/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/24/16
 * Time: 10:02
 */
require_once 'LegacyRectangle.php';
require_once 'RectangleAdapter.php';
$legacyRectangle = new LegacyRectangle(5, 3, 4, 3);
$rectangle = new RectangleAdapter($legacyRectangle);
$rectangle->display();