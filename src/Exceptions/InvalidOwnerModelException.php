<?php

namespace Mnurullahsaglam\LaravelOwner\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;

class InvalidOwnerModelException extends Exception
{
    public function __construct(
        string $ownerModel,
        $message = 'Invalid owner model: %s. Please check your owner model.',
        $code = Response::HTTP_BAD_REQUEST
    ) {
        parent::__construct(sprintf($message, $ownerModel), $code);
    }
}
