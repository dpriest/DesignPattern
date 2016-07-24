<?php
/**
 * Created by PhpStorm.
 * User: dpriest
 * Date: 7/23/16
 * Time: 10:46
 */
require_once 'Window.php';
function run(Window $platform) {
    $platform->makeWindow()->create();
    $platform->makeBtn()->draw();
}
$macPlatform = new Window('mac');
$winPlatform = new Window('windows');
run($macPlatform);
run($winPlatform);
