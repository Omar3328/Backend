<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
   protected $except = [
    'api/login',
        'api/logout',
    'api/cambiar-contrasena',
 'api/password/email',
    'api/password/reset',
    'api/password/send-code',
    'api/password/reset-code'
];

}
