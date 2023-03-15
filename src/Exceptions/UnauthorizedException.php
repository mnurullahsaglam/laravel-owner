<?php

namespace Mnurullahsaglam\LaravelOwner\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class UnauthorizedException extends Exception
{
    public function __construct(
        $message = "Unauthorized. Please login to continue.",
        $code = Response::HTTP_UNAUTHORIZED,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
