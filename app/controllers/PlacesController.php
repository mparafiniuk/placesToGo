<?php

class PlacesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($filter = null)
	{
		if($filter == "visited")
			$places = Place::whereVisited(true)->orderBy('name', 'ASC')->get();
		elseif($filter == "unvisited")
			$places = Place::whereVisited(false)->orderBy('name', 'ASC')->get();
		elseif($filter == "my") 
			$places = Place::whereUser_id(Auth::user()->id)->orderBy('name', 'ASC')->get();
		else
			$places = Place::orderBy('name', 'ASC')->get();

		return View::make('places.table', compact('places'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$input['user_id'] = Auth::user()->id;

		Place::create($input);

		return Redirect::route('places.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		Input::merge(array_map('trim', Input::all()));
		$input = Input::all();

		$editedPlace = Place::find($id);
		$editedPlace->fill($input);
		$editedPlace->save();
		
		return Redirect::route('places.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$deletedPlace = Place::find($id);
		$deletedPlace->delete();

		return Redirect::route('places.index');
	}


}
