<?php

namespace Mnurullahsaglam\LaravelOwner\Tests\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class TestUserModel extends Authenticatable
{
    protected $table = 'test_users';
    protected $guarded = [];

    public $timestamps = false;
}
