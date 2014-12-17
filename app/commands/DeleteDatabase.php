<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class DeleteDatabase extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'db:delete';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Delete the Database.';

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
	public function fire()
	{
		Schema::dropIfExists('answers');
		Schema::dropIfExists('polls');
	}



}
