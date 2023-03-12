<?php

use Mnurullahsaglam\LaravelOwner\Exceptions\InvalidSetting;
use Mnurullahsaglam\LaravelOwner\HasOwner;
use Mnurullahsaglam\LaravelOwner\OwnerSettings;

test('OwnerSettings class exists', function () {
    expect(class_exists(OwnerSettings::class))->toBeTrue();
});

test('InvalidSettings exception class exists', function () {
    expect(class_exists(InvalidSetting::class))->toBeTrue();
});

test('HasOwner trait exists', function () {
    expect(trait_exists(HasOwner::class))->toBeTrue();
});
