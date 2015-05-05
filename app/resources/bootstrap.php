<?php

/**
 * Bootstrap hook.
 * 
 * Anything related to custom intialization or PHP system 
 * tweaks goes here. Here's custom handler of exceptions and
 * error reporting to show all errors and notices.
 * 
 * Anything related to bootstrap can be included here.
 */

$config = storage('config');

ob_start();
session_start();

date_default_timezone_set($config('general.timezone'));
mb_internal_encoding($config('general.encoding'));

set_exception_handler(function ($e) {
    !defined('DEBUG') or show_error($e);
});