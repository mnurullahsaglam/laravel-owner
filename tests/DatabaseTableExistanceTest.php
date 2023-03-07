<?php

use Illuminate\Support\Facades\Schema;

it('checks if the test users table exists', function () {
    expect(Schema::hasTable('test_users'))->toBeTrue();
});

it('checks if the test posts table exists', function () {
    expect(Schema::hasTable('test_posts'))->toBeTrue();
});
