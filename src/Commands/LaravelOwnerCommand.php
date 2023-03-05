<?php

namespace Mnurullahsaglam\LaravelOwner\Commands;

use Illuminate\Console\Command;

class LaravelOwnerCommand extends Command
{
    public $signature = 'laravel-owner';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
