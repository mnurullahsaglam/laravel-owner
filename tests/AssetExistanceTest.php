<?php

use Mnurullahsaglam\LaravelOwner\Exceptions\InvalidOwnerColumnException;
use Mnurullahsaglam\LaravelOwner\Exceptions\InvalidOwnerModelException;
use Mnurullahsaglam\LaravelOwner\Exceptions\UnauthorizedException;
use Mnurullahsaglam\LaravelOwner\HasOwner;
use Mnurullahsaglam\LaravelOwner\OwnerSettings;

test('OwnerSettings class exists', function () {
    expect(class_exists(OwnerSettings::class))->toBeTrue();
});

test('HasOwner trait exists', function () {
    expect(trait_exists(HasOwner::class))->toBeTrue();
});

test('InvalidOwnerColumnException class exists', function () {
    expect(class_exists(InvalidOwnerColumnException::class))->toBeTrue();
});

test('InvalidOwnerModelException class exists', function () {
    expect(class_exists(InvalidOwnerModelException::class))->toBeTrue();
});

test('UnauthorizedException class exists', function () {
    expect(class_exists(UnauthorizedException::class))->toBeTrue();
});
