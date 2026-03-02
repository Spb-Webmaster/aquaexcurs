<?php

namespace App\Mail\Order;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ExcursionOrderUserMail extends Mailable
{
    use Queueable, SerializesModels;
    public ?object $formattedData;

    /**
     * Create a new message instance.
     *
     */
    public function __construct(?object $data)
    {
        try {
            $this->formattedData = $this->formatDataForView($data);
            Log::alert('Прошло __construct' );
        } catch (\Exception $e) {
            Log::error('Ошибка подготовки данных для отправления письма:', [$e->getMessage()]);
            abort(500, 'Ошибка обработки данных');
        }    }

    protected function formatDataForView(?object $data): ?object
    {
        if ($data === null || !isset($data->order)) {
            throw new \Exception("Отсутствуют обязательные данные заказа");
        }
        Log::alert('Прошло formatDataForView' );
        Log::alert($data->order);
        return $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ваш заказ на экскурсию'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(view: 'html.email.excursion_order_user', with: ['order' => $this->formattedData]);

    }


    public function attachments(): array
    {
        return [];
    }
}
