<?php

namespace App\Console\Commands;

use App\Http\Controllers\TestCronController;
use Illuminate\Console\Command;

class TestCronThreeCommand extends Command
{
    protected $signature = 'cron:three';

    protected $description = 'Execute Every Three Minutes';

    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        $testController = new TestCronController();
        $testController->create("From Three Minute");
    }
}
