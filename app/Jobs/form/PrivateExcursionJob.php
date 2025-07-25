<?php

namespace App\Jobs\form;


use App\Mail\Form\PrivateExcursionMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use Support\Traits\CreatorToken;
use Support\Traits\EmailAddressCollector;

class PrivateExcursionJob implements ShouldQueue
{
    use Queueable;

    use EmailAddressCollector;
    use CreatorToken;

    /**
     * Create a new job instance.
     */
    public function __construct(public  array $data)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->emails())->send(new PrivateExcursionMail($this->data));

    }
}
