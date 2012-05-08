<?php
pload('packfire.view.pTheme');

/**
 * Application Theme abstraction class
 *
 * @author Sam-Mauris Yong / mauris@hotmail.sg
 * @copyright Copyright (c) 2010-2012, Sam-Mauris Yong
 * @license http://www.opensource.org/licenses/bsd-license New BSD License
 * @package packfire.app
 * @since 1.0-sofia
 */
abstract class AppTheme extends pTheme {
    
    public static function load($theme){
        $theme = ucfirst($theme) . 'Theme';
        pload('theme.' . $theme);
        return new $theme();
    }
    
}