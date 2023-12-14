<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class WelcomeEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $b_email;
    private $b_name;

    /**
     * Create a new job instance.
     */
    public function __construct($b_email, $b_name)
    {
        $this->b_email = $b_email;
        $this->b_name = $b_name;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->b_email)->send(new WelcomeMail($this->b_name));
    }
}
