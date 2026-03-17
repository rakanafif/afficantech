
<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->subject('Bienvenue chez Affican Digital')
                    ->view('emails.welcome'); // يشير إلى نص الرسالة الذي جهزناه
    }
}
