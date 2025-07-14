<?php
return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    // Cambia el '*' por el origen exacto de tu frontend:
    // Por ejemplo, si usas Vite en localhost:5173
    'allowed_origins' => ['http://localhost:5173'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    // Debe ser true si quieres que se envíen cookies o Authorization headers
    'supports_credentials' => false,

];
