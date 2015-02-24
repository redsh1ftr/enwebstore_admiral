<?php

class ProductCatsController extends \BaseController {

	/**
	 * Display a listing of productcats
	 *
	 * @return Response
	 */
	public function index()
	{
		$productcats = Productcat::all();

		return View::make('productCats.index', compact('productcats'));
	}

	/**
	 * Show the form for creating a new productcat
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('productCats.create');
	}

	/**
	 * Store a newly created productcat in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Productcat::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Productcat::create($data);

		return Redirect::route('product.index');
	}

	/**
	 * Display the specified productcat.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$productcat = Productcat::findOrFail($id);

		return View::make('productCats.show', compact('productcat'));
	}

	/**
	 * Show the form for editing the specified productcat.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$productcat = Productcat::find($id);

		return View::make('productCats.edit', compact('productcat'));
	}

	/**
	 * Update the specified productcat in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$productcat = Productcat::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Productcat::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$productcat->update($data);

		return Redirect::route('productcats.index');
	}

	/**
	 * Remove the specified productcat from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Productcat::destroy($id);

		return Redirect::route('productcats.index');
	}

}
