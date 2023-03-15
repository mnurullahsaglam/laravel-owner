<?php

namespace Mnurullahsaglam\LaravelOwner\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class InvalidOwnerIdException extends Exception
{
    public function __construct(
        $message = "Invalid owner column. Please check your owner column.",
        $code = Response::HTTP_BAD_REQUEST,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
