<?php
/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/23/16
 * Time: 10:46
 */
require_once 'MacPlatform.php';
require_once 'WindowsPlatform.php';
function run(IPlatform $platform) {
    $platform->makeWindow()->create();
    $platform->makeBtn()->draw();
}
$macPlatform = new MacPlatform();
$winPlatform = new WindowsPlatform();
run($macPlatform);
run($winPlatform);
