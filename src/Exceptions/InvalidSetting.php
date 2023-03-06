<?php

namespace Mnurullahsaglam\LaravelOwner\Exceptions;

use Exception;

class InvalidSetting extends Exception
{
    public static function unauthorized(): static
    {
        return new static('Unauthorized. Please login to continue.');
    }

    public static function invalidOwnerModel(): static
    {
        return new static('Invalid owner model. Please check your owner model.');
    }

    public static function invalidOwnerIdColumn(): static
    {
        return new static('Invalid owner column. Please check your owner column.');
    }
}
