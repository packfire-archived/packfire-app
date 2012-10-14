<?php

/**
 * Packfire Application Front Controller for HTTP interface
 * 
 * @author Sam-Mauris Yong / mauris@hotmail.sg
 * @copyright Copyright (c) 2010-2012, Sam-Mauris Yong
 * @license http://www.opensource.org/licenses/bsd-license New BSD License
 * @since 1.0-sofia
 * @internal
 * @ignore
 */

include('pack/constants.php');

// include the main Packfire class
$namespaces = require('pack/vendor/composer/autoload_namespaces.php');
$path = $namespaces['Packfire'];
require $path . DIRECTORY_SEPARATOR . 'Packfire\Packfire.php';
$packfire = new Packfire\Packfire();
$packfire->fire(new Packfire\Application\Http\Application());