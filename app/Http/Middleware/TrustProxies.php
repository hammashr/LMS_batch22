<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class TrustProxies extends Middleware
{
    protected $proxies;

    protected $headers = SymfonyRequest::HEADER_X_FORWARDED_FOR;
}