<?php

/**
 * Configuration file
 * 
 * All the information about database, view, routing, etc.
 * Should be provided here.
 */

return array(
    /**
     * General settings
     * 
     * - timezone - PHP timezone ID
     * - encoding - mb_* function encoding
     */
    'general' => array(
        'timezone' => 'Europe/Moscow',
        'encoding' => 'UTF-8'
    ),
    
    /**
     * Database settings
     * 
     * - autoload - autoload database connection
     * - default  - default group
     */
    'database' => array(
        'autoload' => true,
        'default'  => array(
            'dsn'      => 'sqlite:' . app_path('resources/database.sqlite'),
            'user'     => '',
            'password' => ''
        )
    ),
    
    /**
     * Routing settings
     * 
     * - symbols - subsitute tokens for routing
     */
    'routing' => array(
        'symbols' => array(
            '/:any' => '/?([\d\w\-_]+)',
            '/:num' => '/?(\d+)'
        )
    ),
    
    /**
     * Templates settings
     * 
     * - directory - where templates are located
     * - template - choosen template
     * - layout - choosen layout (for function `layout`)
     */
    'templates' => array(
        'directory' => base_path('views'),
        'template'  => 'default',
        'layout'    => 'main'
    ),
    
    /**
     * Hooks - autoload bootstrap and routes
     */
    'hooks' => array(
        app_path('resources/bootstrap'),
        app_path('resources/routes')
    )
);