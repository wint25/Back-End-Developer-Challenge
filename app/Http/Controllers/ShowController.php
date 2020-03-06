<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        //
		 \App\Shows::create([
          'season' => $request->get('season'),
          'episode' => $request->get('episode'),
          'quote' => $request->get('quote'),
          'user_id' => $request->get('user_id'),
        ]);

        return redirect('/tvshows');
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
		 return view('displayshow', ['shows' => Shows::findOrFail($id)]);
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
		$tvshow = Shows::find($id);
		
		return('tvshow', $tvshow);
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
		$values = array(
		    'season' => 'required|numeric',
			'episode' => 'required|numeric',
			'quote' => 'required'
			);
			
			$validate = Validator::make(Input::all(), $values);
			
			if($validate->fails()){
				return Redirect::to('tvshows/' . $id . '/edit')
					->withErrors($validate)
					->withInput(Input::except('password'));
			}else{
				$tvshow = Shows::find($id);
				$tvshow->season = Input::get('season');
				$tvshow->episode = Input::get('episode');
				$tvshow->quote = Input::get('quote');
				$tvshow->save();
				
				Session::flash('message', 'Successfully update of Tv Show');
				return Redirect::to('tvshows');
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
		$tvshow = Shows::find($id);
		$tvshow->delete();
		
		Session::flash('message', 'Successful Delete');
		return Redirect::to('tvshows');
    }
}
