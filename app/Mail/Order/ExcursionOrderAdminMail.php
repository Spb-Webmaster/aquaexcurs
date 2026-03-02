<?php

namespace App\Mail\Order;

use App\Models\Excursion;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ExcursionOrderAdminMail extends Mailable
{
    use Queueable, SerializesModels;
    public ?object $formattedData;

    /**
     * Create a new message instance.
     *
     */
    public function __construct(?object $data)
    {
        $this->formattedData = $this->formatDataForView($data);
    }

    protected function formatDataForView(?object $data): object
    {
     return $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Запрос на экскурсию'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(view: 'html.email.excursion_order_admin', with: ['data' => $this->formattedData]);

    }


    public function attachments(): array
    {
        return [];
    }
}
