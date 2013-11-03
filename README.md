#Packfire Application

This is an instance of an application building on [Packfire Framework for PHP](http://mauris.sg/packfire/).

You may clone or download and extract this repository to start development on your Packfire Framework Application.

##Setup
1. Git clone or [download a copy](https://github.com/packfire/packfire-app/releases/tag/2.1) of the application.
2. Set your web server root to the 'web' folder
3. Perform a [`composer install`](https://getcomposer.org/) in the 'app' folder to install Packfire Framework and its dependicies. 
4. When done, configure the `rootUrl` config in `app/config/app.dev.yml` to the right URL.
5. Create a file in `app` folder named `env` with just the characters `dev` in the file.
6. Open the app in your browser and you should find a working welcome page. 

##License

Source code in this folder is released to Public Domain.

However,  Packfire Framework for PHP is released open source under the New BSD 3-Clause License and media including images and logos of Packfire Framework for PHP included in this repository are still licensed under the [Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported](https://github.com/packfire/packfire-framework/blob/master/license/packfire-content.license.txt).

