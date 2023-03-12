<?php

use Mnurullahsaglam\LaravelOwner\Tests\Models\TestUserModel;
use Mnurullahsaglam\LaravelOwner\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

uses()->beforeEach(fn () => $this->actingAs(TestUserModel::first()))
    ->in('HasOwnerTest.php');
