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
    protected $name = 'world:init';

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

        $pretend = Arr::get($this->option(), 'pretend', false);

        $this->migrator->run(__DIR__ . '/../../../database/migrations/', ['pretend' => $pretend]);
    }

    /**
     * Prepare the migration database for running.
     *
     * @return void
     */
    protected function prepareDatabase()
    {
        $this->migrator->setConnection($this->option('database'));

        if (! $this->migrator->repositoryExists()) {
            $options = array('--database' => $this->option('database'));

            $this->call('migrate:install', $options);
        }
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['database', null, InputOption::VALUE_OPTIONAL, 'The database connection to use.'],
            ['pretend', null, InputOption::VALUE_NONE, 'Dump the SQL queries that would be run.'],
        ];
    }
}