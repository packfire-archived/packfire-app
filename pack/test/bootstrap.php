<?php

/**
 * PHPUnit Test Bootstrap Script
 * 
 * Provides Pre-test configuration and bootstrapping for
 * Packfire and PHPUnit integration.
 *
 * @author Sam-Mauris Yong / mauris@hotmail.sg
 */

define('__PACKFIRE_START__', microtime(true));

require(dirname(__DIR__) . '/constants.php');
$path = null;
if(__PACKFIRE_ROOT__){
    $path = __PACKFIRE_ROOT__;
}else{
    $namespaces = include(dirname(__DIR__) . '/vendor/composer/autoload_namespaces.php');
    if($namespaces){
        $path = $namespaces['Packfire'];
    }
}

if($path){
    require $path . DIRECTORY_SEPARATOR . 'Packfire\Packfire.php';
    $packfire = new Packfire\Packfire();
    $packfire->classLoader()->register(true);
}else{
    throw new \Exception('Could not bootstrap test because Packfire Framework was not installed.');
}