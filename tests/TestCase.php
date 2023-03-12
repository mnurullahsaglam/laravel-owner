<?php

namespace Mnurullahsaglam\LaravelOwner\Tests;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Mnurullahsaglam\LaravelOwner\Tests\Models\TestUserModel;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpDatabase();

        $this->createUser();
    }

    protected function tearDown(): void
    {
        Schema::dropIfExists('test_users');
        Schema::dropIfExists('test_posts');

        parent::tearDown();
    }

    public function setUpDatabase()
    {
        Schema::create('test_users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
        });

        Schema::create('test_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('test_users')->cascadeOnDelete();
            $table->string('title');
        });
    }

    private function createUser()
    {
        TestUserModel::create([
            'email'    => 'test@test.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
