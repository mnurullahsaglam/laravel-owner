<?php

namespace Mnurullahsaglam\LaravelOwner\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;

class InvalidOwnerColumnException extends Exception
{
    public function __construct(
        string $ownerColumn,
        $message = 'Invalid owner column: %s. Please check your owner column.',
        $code = Response::HTTP_BAD_REQUEST
    ) {
        parent::__construct(sprintf($message, $ownerColumn), $code);
    }
}
