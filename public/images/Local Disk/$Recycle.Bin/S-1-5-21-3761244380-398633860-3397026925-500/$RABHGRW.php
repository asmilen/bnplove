<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class getCurrentRate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rate:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lay rate hien tai tu d2top, d2vp';

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
        //
        \DB::table('accounts')->insert(
                ['steam_id' => rand(1,10000), 'username' => 'a']
            );
    }
}
