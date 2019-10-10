<?php

namespace Wuyu\World\Console\Commands;

use Illuminate\Console\Command;

/**
 * Init Command
 */
class Init extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'world:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize';

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
        $this->info('Initialize world data start:');
        $this->call('migrate --path=' . __DIR__ . '/../../../database/migrations/');
        $this->info('Create tables success.');
        $this->call('db:seed',["--class" => "\\Wuyu\\World\\Database\\Seeds\\WorldDatabaseSeeder"]);
        $this->info('Initialize world data finished.');
    }
}