<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class InstallDatabase extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'db:install';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Install the Database.';

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
		Schema::create('polls', function($table)
		{	
			$table->engine = 'InnoDB';

		    $table->increments('id');
		    $table->string('question');
		    $table->timestamps();
		    $table->softDeletes();
		});

		Schema::create('answers', function($table)
		{
			$table->engine = 'InnoDB';
			
		    $table->increments('id');
		    $table->string('answer');
		    $table->integer('votes');

		    $table->integer('poll_id')->unsigned();
		    $table->foreign('poll_id')->references('id')->on('polls')->onDelete('cascade');
		});
	}


}
