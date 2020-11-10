<?php

namespace App\Console\Commands;

use App\Http\Controllers\TestCronController;
use Illuminate\Console\Command;

class TestCronCommand extends Command
{

    protected $signature = 'cron:one';

    protected $description = 'Execute Every Minute';


    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        $testController = new TestCronController();
        $testController->create("From One Minute");
    }
}
