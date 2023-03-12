<?php

use Mnurullahsaglam\LaravelOwner\HasOwner;
use Mnurullahsaglam\LaravelOwner\Tests\Models\TestPostModel;

test('TestPostModel uses HasOwner trait', function () {
    expect(in_array(HasOwner::class, class_uses(TestPostModel::class)))
        ->toBeTrue();
});

test('TestPostModel has getOwnerSettings method', function () {
    expect(method_exists(TestPostModel::class, 'getOwnerSettings'))
        ->toBeTrue();
});
