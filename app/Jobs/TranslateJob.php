<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class TranslateJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger('Translating text...');
        //jun time comsuming task xa teslaai yeta raakhne.....
        // jastai 1000 user create grna paryo vaney tyo kaam yeta garne... bahira route ko thaau maa nagarne
    }
}
