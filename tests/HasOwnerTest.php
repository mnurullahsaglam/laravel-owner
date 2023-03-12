<?php

use Mnurullahsaglam\LaravelOwner\Tests\Models\TestPostModel;
use Mnurullahsaglam\LaravelOwner\Tests\Models\TestUserModel;

it('will save user_id when saving a model', function () {
    $post = TestPostModel::create([
        'title' => 'Test Post',
    ]);

    expect($post->user_id)->toBe(TestUserModel::first()->id);
});
