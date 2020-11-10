<?php

namespace App\Console\Commands;

use App\Http\Controllers\TestCronController;
use Illuminate\Console\Command;

class TestCronTwoCommand extends Command
{
    protected $signature = 'cron:two';

    protected $description = 'Execute Every Two Minutes';

    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        $testController = new TestCronController();
        $testController->create("From Two Minute");
    }
}
