<?php

it('has OwnerSettings class', function () {
    expect(class_exists(\Mnurullahsaglam\LaravelOwner\OwnerSettings::class))->toBeTrue();
});

it('has InvalidSettings exception class', function () {
    expect(class_exists(\Mnurullahsaglam\LaravelOwner\Exceptions\InvalidSetting::class))->toBeTrue();
});

it('has HasOwner trait', function () {
    expect(trait_exists(\Mnurullahsaglam\LaravelOwner\HasOwner::class))->toBeTrue();
});

it('uses HasOwner trait in default model', function () {
    expect(in_array(\Mnurullahsaglam\LaravelOwner\HasOwner::class, class_uses(\Mnurullahsaglam\LaravelOwner\Tests\Models\TestDefaultModel::class)))->toBeTrue();
});
