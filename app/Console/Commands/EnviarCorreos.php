<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Thomasjohnkane\Snooze\Traits\SnoozeNotifiable;
use Illuminate\Notifications\Notifiable;

class EnviarCorreos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:correos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

    }
}
