<?php

class ArtistsController extends \BaseController {

	/**
	 * Display a listing of artists
	 *
	 * @return Response
	 */
	public function index()
	{
		$artists = Artist::all();

		return View::make('artists.index', compact('artists'));
	}

	/**
	 * Show the form for creating a new artist
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('artists.create');
	}

	/**
	 * Store a newly created artist in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Artist::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Artist::create($data);

		return Redirect::route('artists.index');
	}

	/**
	 * Display the specified artist.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$artist = Artist::findOrFail($id);

		return View::make('artists.show', compact('artist'));
	}

	/**
	 * Show the form for editing the specified artist.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$artist = Artist::find($id);

		return View::make('artists.edit', compact('artist'));
	}

	/**
	 * Update the specified artist in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$artist = Artist::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Artist::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$artist->update($data);

		return Redirect::route('artists.index');
	}

	/**
	 * Remove the specified artist from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Artist::destroy($id);

		return Redirect::route('artists.index');
	}

}
