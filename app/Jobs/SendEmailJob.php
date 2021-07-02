<?php

namespace App\Jobs;

use App\Mail\SendMessage;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $subscriber;
    public $message;

    /**
     * Create a new job instance.
     *
     * @param $subscriber
     * @param $message
     */
    public function __construct($subscriber, $message)
    {
        //
        $this->subscriber = $subscriber;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        Mail::to($this->subscriber['email'])
            ->send(
                new SendMessage($this->subscriber['name'], $this->message)
            );
    }
}
