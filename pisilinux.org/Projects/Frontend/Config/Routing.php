<?php return
[
    /*
    |--------------------------------------------------------------------------
    | Open Controller
    |--------------------------------------------------------------------------
    |
    | Default boot controller.
    |
    */

    'openController' => 'Home',

    /*
    |--------------------------------------------------------------------------
    | Open Function
    |--------------------------------------------------------------------------
    |
    | It is the default method of operation of the controller.
    |
    */

    'openFunction' => 'main',
    
    /*
    |--------------------------------------------------------------------------
    | Show 404
    |--------------------------------------------------------------------------
    |
    | Forwards the invalid request to the specified URI.
    |
    */

    'show404' => '',

    /*
    |--------------------------------------------------------------------------
    | Request Methods
    |--------------------------------------------------------------------------
    |
    | Which URI specifies which request methods are valid or invalid.
    |
    */

    'requestMethods' =>
    [
        'page'            => '',
        'disallowMethods' => [],
        'allowMethods'    => []  
    ],

    /*
    |--------------------------------------------------------------------------
    | Pattern Type
    |--------------------------------------------------------------------------
    |
    | Regex type for route.
    |
    */

    'patternType' => 'classic',

    /*
    |--------------------------------------------------------------------------
    | Change URI
    |--------------------------------------------------------------------------
    |
    | Used to create a route. ['new regex' => 'old uri']
    |
    */

    'changeUri' => [
        'content'   => 'content/main',
        'category'  => 'category/main',
        'page'      => 'page/main',
        'etiketler' => 'etiketler/main',
        'blog'      => 'blog/main',
    

    ]
];
