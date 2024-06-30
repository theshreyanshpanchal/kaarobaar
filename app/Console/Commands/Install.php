<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Install extends Command
{
    protected $signature = 'app:install';

    protected $description = "Command to setup and install {config('app.name')}";

    public function handle()
    {
        
    }
}
