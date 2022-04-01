<?php

namespace Manuglopez\LaravelWoosubscriptions\Commands;

use Illuminate\Console\Command;

class LaravelWoosubscriptionsCommand extends Command
{
    public $signature = 'laravel-woosubscriptions';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
