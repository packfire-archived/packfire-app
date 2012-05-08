<?php
pload('app.AppTheme');

/**
 * Dark Theme
 *
 * @author Sam-Mauris Yong / mauris@hotmail.sg
 * @copyright Copyright (c) 2010-2012, Sam-Mauris Yong
 * @license http://www.opensource.org/licenses/bsd-license New BSD License
 * @package candice.theme
 * @since 1.0-sofia
 */
class DarkTheme extends AppTheme {
    
    public function render() {
        $this->define('style', 'dark');
    }
    
}