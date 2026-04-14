<?php

namespace App\Jobs\Form;

use App\Mail\Form\ExcursionEmailMail;
use App\Models\Excursion;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use Support\Traits\CreatorToken;
use Support\Traits\EmailAddressCollector;

class ExcursionEmailJob implements ShouldQueue
{
    use Queueable;

    use EmailAddressCollector;
    use CreatorToken;

    public function __construct(public  array $data)
    {

    }


    public function handle(): void
    {
        //excursion_id
       // dd($this->data);

        $emails = $this->getEmails($this->data['excursion_id']);
        Mail::to($emails)->send(new ExcursionEmailMail($this->data));

    }


    public function getEmails($id = null):string|array
    {

        if(!is_null($id)) {
            $excursion = Excursion::find($id);
            if($excursion && !is_null($excursion->dont_register_form_to_email)) {
                return $excursion->dont_register_form_to_email;
            }
        }

        return $this->emails();

    }

}
