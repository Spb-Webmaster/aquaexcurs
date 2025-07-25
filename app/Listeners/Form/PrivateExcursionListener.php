<?php

namespace App\Listeners\Form;

use App\Events\Form\PrivateExcursionEvent;
use App\Jobs\form\PrivateExcursionJob;
use Support\Traits\CreatorToken;
use Support\Traits\EmailAddressCollector;

class PrivateExcursionListener
{
    use EmailAddressCollector;
    use CreatorToken;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     * сообщение о том, пришла новыя Accreditation
     */
    public function handle(PrivateExcursionEvent $event): void
    {

        $data = $event->request;

/*        $data['form']['name'][0] = 'Имя';
        $data['form']['name'][1] = $event->request['name'];
        $data['form']['email'][0] = 'Email';
        $data['form']['email'][1] = $event->request['email'];
        $data['form']['phone'][0] = 'Телефон';
        $data['form']['phone'][1] = $event->request['phone'];
        $data['form']['quantity'][0] = 'Количество пассажиров';
        $data['form']['quantity'][1] = $event->request['quantity'];
        $data['form']['message'][0] = 'Сообщение';
        $data['form']['message'][1] = $event->request['message'];
        $data['form']['flatpickr_date'][0] = 'Желаемая дата';
        $data['form']['flatpickr_date'][1] = $event->request['flatpickr_date'];*/


        PrivateExcursionJob::dispatch($data); // Job
        //Mail::to($this->emails())->send(new AccreditationMail($data));


    }
}
