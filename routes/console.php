<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::command('queue:work --stop-when-empty')
    ->everyMinute()
    ->withoutOverlapping();

Schedule::command('quantity_tickets:cron')->dailyAt('00:01')->withoutOverlapping();

// Копия базы и файлов на Яндекс Диск — воскресенье 03:30 (время сервера)
Schedule::command('backup:yadisk')->weeklyOn(0, '03:30')->runInBackground()->withoutOverlapping(720);
