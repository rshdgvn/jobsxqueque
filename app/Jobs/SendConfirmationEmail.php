<?php

namespace App\Jobs;

use App\Notifications\SendEmailNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SendConfirmationEmail implements ShouldQueue 
{
    use Queueable;

    /**
     * Create a new job instance.
     */

    public $contact;

    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        $this->contact->notify(new SendEmailNotification($this->contact));
    }
}
