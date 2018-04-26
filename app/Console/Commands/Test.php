<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use JsonRpc\Base\Rpc;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:test';

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
        //$bitcoin = new Rpc('http://admin:admin888@127.0.0.1:8335/');
        $bitcoin = new \App\Rpc\Rpc('admin','admin888','127.0.0.1','8335');
        //$bitcoin= new RpcCallFailedException('http://admin:admin888@127.0.0.1:8335/');
        dd($bitcoin->getnewaddress());

    }
}
