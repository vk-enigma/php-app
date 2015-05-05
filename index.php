<?php

define('MF_BASEPATH', __DIR__ . '/');
define('MF_APP_DIR' , __DIR__ . '/app/');

define('DEBUG', true);

require 'vendor/autoload.php';

app_boot(
    app_path('resources/config')
);