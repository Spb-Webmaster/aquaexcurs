<?php

namespace App\Console\Commands;

use App\Models\User;
use Domain\Excursion\ViewModels\ExcursionViewModel;
use Domain\ExcursionOrder\ViewModels\ExcursionOrderViewModels;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class QuantityTicketsCron extends Command
{

    /**
     *
     *
     * @var string
     */
    protected $signature = 'quantity_tickets:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start cron - quantity_tickets:cron';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        ini_set('memory_limit', '8192M');

        $excursions =  ExcursionViewModel::make()->excursions();
        foreach ($excursions as $excursion) {
            /** Пересчитаем количество билетов */
            $result = ExcursionOrderViewModels::make()->quantityTicketsCalculation($excursion->id);
            //dump($result);

        }

    }


}
