<?php

class ArtistCatsController extends \BaseController {

	/**
	 * Display a listing of artistcats
	 *
	 * @return Response
	 */
	public function index()
	{
		$artistcats = Artistcat::all();

		return View::make('artistcats.index', compact('artistcats'));
	}

	/**
	 * Show the form for creating a new artistcat
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('artistcats.create');
	}

	/**
	 * Store a newly created artistcat in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Artistcat::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Artistcat::create($data);

		return Redirect::route('artistcats.index');
	}

	/**
	 * Display the specified artistcat.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$artistcat = Artistcat::findOrFail($id);

		return View::make('artistcats.show', compact('artistcat'));
	}

	/**
	 * Show the form for editing the specified artistcat.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$artistcat = Artistcat::find($id);

		return View::make('artistcats.edit', compact('artistcat'));
	}

	/**
	 * Update the specified artistcat in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$artistcat = Artistcat::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Artistcat::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$artistcat->update($data);

		return Redirect::route('artistcats.index');
	}

	/**
	 * Remove the specified artistcat from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Artistcat::destroy($id);

		return Redirect::route('artistcats.index');
	}

}
