<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Domain\ExcursionOrder\ViewModels\ExcursionOrderViewModels;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Session\Session as SessionContract;


class OrderExcursionRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'email' => str(request('email'))
                ->squish()
                ->lower()
                ->value(),
            'phone' => phone($this->input('phone')),

        ]);
    }

    public function rules(): array
    {
        return [
            'username' => ['required', 'min:2', 'max:100'],
            'phone' => ['required', 'string', 'min:6', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', 'nullable'],
            'offer' => ['required'],
            'excursion_date' => ['required',
                'date_format:d.m.Y',
                function ($attribute, $value, $fail) {
                    // Извлекаем действительную дату из сессии
                    $order = ExcursionOrderViewModels::make()->getSession(config('site.constants.tour_data'));
                    if ($order && $order['open_date']) {
                        // Проверяем совпадение введённой даты с той, что была ранее записана в сессию
                        if ($value !== $order['open_date']) {
                            $fail("Дата экскурсии установлена не верно");
                        }
                    }
                },
                //open_date
            ], // Правило date_format заменено на date_format:d.m.Y
        ];
    }


    /**
     * Метод для замены стандартных сообщений об ошибках
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'username.required' => 'Необходимо ввести ФИО.',
            'username.min' => 'Мин. длина ФИО :min символов.',
            'username.max' => 'Макс. длина ФИО :max символов.',
            'phone.required' => 'Необходим номер телефона.',
            'email.required' => 'Необходим email для получения билета.',
            'phone.min' => 'Мин. длина  - :min.',
            'phone.max' => 'Макс. длина номера  - :max.',
            'email.max' => 'Длина email -  :max',
            'excursion_date.required' => 'Укажите дату.',
            'excursion_date.date_format' => 'Не правильный формат даты.',
            'offer.required' => 'Требуется принятие оферты.',
        ];
    }
}
