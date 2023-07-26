<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GetDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:dbName';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To Get the current database name';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
