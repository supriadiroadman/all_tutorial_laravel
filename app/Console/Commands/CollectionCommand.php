<?php

namespace App\Console\Commands;

use App\CollectionExample;
use Illuminate\Console\Command;

class CollectionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'collection:example';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Belajar Laravel Collection';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        dd((new CollectionExample())->example());
    }
}
