<?php

use Illuminate\Support\Facades\Schema;

test('test_users table exists', function () {
    expect(Schema::hasTable('test_users'))->toBeTrue();
});

test('test_posts table exists', function () {
    expect(Schema::hasTable('test_posts'))->toBeTrue();
});
