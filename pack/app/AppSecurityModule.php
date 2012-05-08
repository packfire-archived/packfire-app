<?php
pload('packfire.security.pSecurityModule');

/**
 * The application's security module
 * Configure by overriding the appropriate methods.
 *
 * @author Sam-Mauris Yong / mauris@hotmail.sg
 * @copyright Copyright (c) 2010-2012, Sam-Mauris Yong
 * @license http://www.opensource.org/licenses/bsd-license New BSD License
 * @package packfire.app
 * @since 1.0-sofia
 */
class AppSecurityModule extends pSecurityModule {
    
    public function authenticate($token) {
        return parent::authenticate($token);
    }

    public function authorize($route) {
        return parent::authorize($route);
    }

    public function deauthenticate() {
        parent::deauthenticate();
    }

    public function identity($newIdentity = null) {
        return parent::identity($newIdentity);
    }

    
}