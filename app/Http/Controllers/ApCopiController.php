<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApCopi;
use App\ApState;
use DB;


class ApCopiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Testing Query Builder for custom Artisan command 
		// Artisan command can be tested with: php artisan displayLine
		// Grab data from database
	   $copis = ApCopi::whereHas('state', function ($query) {
       $query->where('code', 'not like', 'DC');
				})->selectraw('state, round(avg(steak), 2) as steak, round(avg(grnd_beef), 
							  2) as beef, round(avg(sausage),2) as sausage, round(avg(fry_chick),
							  2) as fried, round(avg(tuna),2) as tuna')
				  ->groupBy('state')
		          ->limit(55)->get();
		// loop through data to print
		foreach($copis as $copi){
			$value = $copi->state . ': ' . 'Steak (' . $copi->steak . ') '. 'Ground Beef (' . $copi->beef . ') '. 'Sausage (' . $copi->sausage . ') '
			. 'Fried Chicken (' . $copi->fried . ') '. 'Tuna (' . $copi->tuna . ')';
			dump($value);
			
		}
	
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
