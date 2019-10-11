<?php

namespace Wuyu\World\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Migrations\Migrator;
use Symfony\Component\Console\Input\InputOption;
use Illuminate\Support\Arr;

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

    protected $migrator;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Migrator $migrator)
    {
        parent::__construct();
        $this->migrator = $migrator;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Initialize world data start:');
        $this->migrate();
        $this->info('Create tables success.');
        $this->call('db:seed',["--class" => "\\Wuyu\\World\\Database\\Seeds\\WorldDatabaseSeeder"]);
        $this->info('Initialize world data finished.');
    }

    /**
     * Migrate
     *
     * @return void
     */
    protected function migrate()
    {
        $this->prepareDatabase();

        $this->migrator->run(__DIR__ . '/../../../database/migrations/', ['pretend' => false]);
    }

    /**
     * Prepare the migration database for running.
     *
     * @return void
     */
    protected function prepareDatabase()
    {
        if (! $this->migrator->repositoryExists()) {
            $this->call('migrate:install');
        }
    }
}