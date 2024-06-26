<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct(array $details)
    {
        $this->details = $details;
    }

    public function build()
    {
        return $this->from('ICT@ardho.org', 'Company Profile')
                    ->subject('Company Profile')
                    ->markdown('emails.send-email');
    }
}
