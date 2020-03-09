<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shows;
use Session;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all quotes
		 $tvshows = \App\Shows::all();

        return view('viewshows', ['allTvshows' => $tvshows]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //navigate to create quotes
		return view('createshow');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store new quotes in database
		 $tvshow = new Shows([
          'season' => $request->get('season'),
          'episode' => $request->get('episode'),
          'quote' => $request->get('quote'),
          'user_id' => $request->user()->id,
        ]);
		$tvshow->save();
		Session::flash('flash_message', 'Quote successfully added!');
		return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show a specific quote
		 return view('displayshow', ['shows' => Shows::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   //display quotes in database to edit
		return view('updateshow', ['show' => Shows::findOrFail($id)]);
        
	
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
        
				// update a particular quote in the database
				$tvshow = Shows::find($id);
				$tvshow->season = $request->get('season');
                $tvshow->episode = $request->get('episode');
                $tvshow->quote = $request->get('quote');
		        $tvshow->save();
				Session::flash('flash_message', 'Quote successfully updated!');
				return view('welcome');
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete a particular quote from the database
		$tvshow = Shows::find($id);
		$tvshow->delete();
		Session::flash('flash_message', 'Quote successfully deleted!');
		return view('welcome');
	
    }
	
	public function editlist(){
		//display a list of quotes
		$tvshows = \App\Shows::all();

        return view('editshow', ['allTvshows' => $tvshows]);
		
	}
	
	public function deletelist(){
		//display a list of quotes to delete
		$tvshows = \App\Shows::all();

        return view('deleteshow', ['allTvshows' => $tvshows]);
	}
}
