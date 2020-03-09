<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\ApCopi;
use App\ApState;

class displayCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'displayLine';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Displays Avg food prices per State on one line of the console';

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
		//command can be called from: php artisan displayLine
        //Grab Data from database
		$copis = ApCopi::whereHas('state', function ($query) {
		$query->where('code', 'not like', 'DC');
			})->selectraw('state, round(avg(steak), 2) as steak, round(avg(grnd_beef), 2) 
						  as beef, round(avg(sausage),2) as sausage, round(avg(fry_chick)
						  ,2) as fried, round(avg(tuna),2) as tuna')
			  ->groupBy('state')
		      ->limit(55)->get();
		//loop through data and print to console
		foreach($copis as $copi){
			$value = $copi->state . ': ' . 'Steak (' . $copi->steak . ') '. 'Ground Beef (' . $copi->beef . ') '. 'Sausage (' . $copi->sausage . ') '
			. 'Fried Chicken (' . $copi->fried . ') '. 'Tuna (' . $copi->tuna . ')';
			$this->line($value);
			
		}
    }
}
