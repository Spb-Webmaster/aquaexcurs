<?php

namespace App\Livewire\Form;


use App\Events\Form\PrivateExcursionEvent;
use App\Models\SiteFormEmail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class PrivateExcursion extends Component
{


    public string $title; // описание - заголовок формы
    public string $subtitle; // описание - подзаголовок у формы
    public string $title_response; // ответ - меняем заголовок формы
    public string $subtitle_response; // ответ - меняем подзаголовок у формы

    #[Validate('required', message: 'Введите имя')]
    #[Validate('min:3', message: 'Минимум три знака')]
    #[Validate('max:25', message: 'Максимально 25 знаков')]
    public string $name;
    /** имя */

    #[Validate('required', message: 'Введите email')]
    #[Validate('email', message: 'Введите email')]
    #[Validate('min:3', message: 'Минимум три знака')]
    #[Validate('max:25', message: 'Максимально 25 знаков')]
    public string $email;
    /** email */

    #[Validate('min:7', message: 'Минимум семь знаков')]
    public string $phone;
    /** phone */

    #[Validate('max:5', message: 'Максимально 5 знаков')]
    public $quantity;
    public $q;
    /** количество */

    #[Validate('max:2500', message: 'Максимально 2500 знаков')]
    public string $message;
    /** примечание */

    #[Validate('max:25', message: 'Максимально 25 знаков')]
    public string $flatpickr_date;
    /** Выбрать дату */

    public bool $response  = false;
    public bool $loader = false;



    public function reset_error($field)
    {
        $this->resetErrorBag($field);
    }


    public function save()
    {

        $this->loader = true;
        $validated = $this->validate();
       // dd($validated);

        if($validated) {

            $this->response = true;

            $data['form']['name'][0] = 'Имя';
            $data['form']['name'][1] = $validated['name'];
            $data['form']['email'][0] = 'Email';
            $data['form']['email'][1] = $validated['email'];
            $data['form']['phone'][0] = 'Телефон';
            $data['form']['phone'][1] = $validated['phone'];
            $data['form']['quantity'][0] = 'Количество пассажиров';
            $data['form']['quantity'][1] = $validated['quantity'];
            $data['form']['message'][0] = 'Сообщение';
            $data['form']['message'][1] = $validated['message'];
            $data['form']['flatpickr_date'][0] = 'Желаемая дата';
            $data['form']['flatpickr_date'][1] = $validated['flatpickr_date'];


          //  dd(json_encode($data));



            PrivateExcursionEvent::dispatch($data);

           SiteFormEmail::create(["params" => json_encode($data)]);

        }



    }

    public function render()
    {
        return view('livewire.form.private-excursion');
    }
}
