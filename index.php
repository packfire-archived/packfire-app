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
if(include(__PACKFIRE_PATH__ . '/Packfire.php')){
    pload('app.Application');
    // IMMA FIRIN' MA LAZOR
    $packfire = new Packfire();
    $packfire->fire(new Application());
}else{
    
}