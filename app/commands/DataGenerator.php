<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class DataGenerator extends Command {

	public $words = array('mastiche','unwholesome','heathenized','committing','subarid','pinnula','toastiest','applesnits','exudate','wintertime','outthinking','synchronous','understrap','speakable','coherence','camisade','eucharis','creosol','jocasta','seascouting','inveigher','boloney','botsares','oversalt','unslacking','outwallop','calesa','lubricate','unthriving','landgravine','protanope','immenseness','underlit','chammying','preexpound','outbellow','liquory','nocturnal','overlight','postfetal','cremator','quarrying','synthesize','vehemence','coveter','diphthongized','porousness','familism','backscratcher','pedleries','lizardfish','inspanning','laurium','waterer','multitoed','untalking','zhivago','hearingless','endosarc','repetend','sugarplum','steadily','rapallo','pollable','demotion','lyriform','parchmentize','choregus','unwitty','aroostook','intrigant','daimonic','sanctioner','gibbosely','coranto','fonseca','retemper','villenage','piscator','clausula','questionnaire','ennuyante','indicant','stipitate','sphenogram','multiform','logia','perfection','lusaka','mansra','blithering','ungrowing','minibus','outcity','mortgager','morphosis','uncredit','unfevered','unwoeful','alexin');

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'data:generate';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generate Random Data in DB.';

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
		$poll = new Poll();
		$poll->question = $this->_generateQuestion();
		
		$answers = array();
		for ($i = rand(3,6);$i;$i--) {
			$data = new Answer();
			$data->answer = $this->_generateAnswer();
			$data->votes = 0;
			$answers[] = $data;
		}

		$poll->save();
		$poll->answers()->saveMany($answers);
	}

	private function _generateQuestion()
	{
		$question = '';
		$max = count($this->words)-1;

		for ($i = rand(2,10);$i;$i--) $question .= $this->words[rand(0,$max)]." ";
		
		return $question.'?';
	}

	private function _generateAnswer()
	{
		$answer = '';
		$max = count($this->words)-1;

		for ($i = rand(1,5);$i;$i--) $answer .= $this->words[rand(0,$max)]." ";
		
		return $answer;
	}
}
