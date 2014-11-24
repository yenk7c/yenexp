<?php

class CatergoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cat = Catergories::all();
		return View::make('catergories.index')->with('cat',$cat);
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
		$cat = new Catergories();
		$cat->name =  Input::get('name');
		$cat->save();
		Session::flash('message', 'Successfully created catergory!');
		return Redirect::to('/catergory');
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
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
			$cat = catergories::find($id);
			$cat->name       = Input::get('name');
	
            $cat->save();
                 // redirect
            Session::flash('message', 'Successfully updated cat!');
            return Redirect::to('/catergory');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cat = Catergories::find($id);
        $cat->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the catergory!');
        return Redirect::to('/catergory');
	}


}
