<?php

namespace Mnurullahsaglam\LaravelOwner\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Mnurullahsaglam\LaravelOwner\HasOwner;
use Mnurullahsaglam\LaravelOwner\OwnerSettings;

class TestPostModel extends Model
{
    use HasOwner;

    protected $table = 'test_posts';
    protected $guarded = [];

    public $timestamps = false;

    public function getOwnerSettings(): OwnerSettings
    {
        return OwnerSettings::create()
            ->setOwnerModel(TestUserModel::class);
    }
}
