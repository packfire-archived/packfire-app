<?php

$app_dir = __DIR__ . '/..';
$packfire = require($app_dir . '/app/bootstrap.php');
if ($packfire) {
    $packfire->fire(new HttpApplication());
}
