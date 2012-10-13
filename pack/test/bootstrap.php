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
define('__APP_ROOT__', '');

$namespaces = require('vendor/composer/autoload_namespaces.php');
$path = $namespaces['Packfire'];
require $path . DIRECTORY_SEPARATOR . 'Packfire.php';
$packfire = new Packfire\Packfire();