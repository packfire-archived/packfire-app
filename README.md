#Packfire Application

This is an instance of an application building on [Packfire Framework for PHP](http://mauris.sg/packfire/).

You may clone or download and extract this repository to start development on your Packfire Framework Application.

The root directory of this repository represents the root path of the application which the routing will handle from.

##File & Folders

:file_folder: `/assets/`: contains all images, JavaScript stylesheet and any other client-side resource files. You may modify the folder however you wish.

:page_facing_up: `/favicon.ico`: The Packfire Framework favicon that will show up on browser tabs and bookmarks. 

:page_facing_up: `/.htaccess`: Apache HTTP Server folder configuration to supporting Packfire Framework URL routing operations

:page_facing_up: `/index.php`: The front controller that all requests to the application will pass through and be routed from. 

:file_folder: `/pack/`: contains the application configuration, source code, tests and metadata

:page_facing_up: `/pack/composer.json`: [Composer](http://getcomposer.org) metadata

:page_facing_up: `/pack/constants.php.dist`: Distributive  file that determines where Packfire Framework is installed and what environment is the application running in.

:page_facing_up: `/pack/phpunit.xml.dist`: Distributive configuration file that tests [PHPUnit](http://www.phpunit.de/) how to run the unit testing process automatically.

:file_folder: `/pack/config/`: Contains all configurations for Packfire to run the application properly

:page_facing_up: `/pack/config/app.yml`: The application configuration file.

:page_facing_up: `/pack/config/app.local.yml`: The application configuration that is only loaded when in the "local" environment.

:page_facing_up: `/pack/config/ioc.yml`: Configuration for the IoC services that will be available to the application

:page_facing_up: `/pack/config/routing.yml`: Routing configuration file that contains information about your application's URLs, controllers and their input.

:file_folder: `/pack/src/`: The folder containing the application source code to be stored with compliance with [PSR-0 accepted standards](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md).

:file_folder: `/pack/storage/`: Contains storage for the application: `cache`, `log` and `temp`.

:file_folder: `/pack/test/`: The folder containing the test files to be run by PHPUnit as configured in `phpunit.xml.dist`. Structure of source code in this folder should be same as the source folder.

:page_facing_up: `/pack/test/bootstrap.php`: The bootstrapping file used by PHPUnit to boot the tests properly.

##License

While Packfire Framework for PHP is released open source under the New BSD 3-Clause License, source code in this folder is released to Public Domain.

However, media including images and logos of Packfire Framework for PHP included in this repository are still licensed under the [Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported](https://github.com/packfire/packfire-framework/blob/master/license/packfire-content.license.txt).

