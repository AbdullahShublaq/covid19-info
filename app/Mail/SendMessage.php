<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $message;
    public $date;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $message
     */
    public function __construct($name, $message)
    {
        //
        $this->name = $name;
        $this->message = $message;
        $this->date = Carbon::now()->toDateString();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.message')
            ->subject("COVID19 Info ({$this->date})");
    }
}
