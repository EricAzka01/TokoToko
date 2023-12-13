<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\WelcomeMailSeller;
use Illuminate\Support\Facades\Mail;

class WelcomeEmailJobSeller implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $s_email;
    private $s_name;

    /**
     * Create a new job instance.
     */
    public function __construct($s_email, $s_name)
    {
        $this->s_email = $s_email;
        $this->s_name = $s_name;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->s_email)->send(new WelcomeMailSeller($this->s_name));
    }
}
