<?php

namespace Mnurullahsaglam\LaravelOwner\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class InvalidOwnerModelException extends Exception
{
    public function __construct(
        $message = "Invalid owner model. Please check your owner model.",
        $code = Response::HTTP_BAD_REQUEST,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
