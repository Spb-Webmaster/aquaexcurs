<?php

use App\Console\Commands\Test;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


/*
Schedule::command('queue:work --stop-when-empty')
    ->everyMinute()
    ->withoutOverlapping();*/

Schedule::command(Test::class)->everyMinute();
