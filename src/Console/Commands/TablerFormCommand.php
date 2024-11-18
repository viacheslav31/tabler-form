<?php

namespace Tabler\TablerForm\Console\Commands;

use Illuminate\Console\Command;

class TablerFormCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tabler-form:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $ask = $this->ask('Setup tabler-form?');
        dd($ask);
    }
}
