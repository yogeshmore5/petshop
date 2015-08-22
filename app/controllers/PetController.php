<?php

class PetController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Below can be used for pagination if needed
		// $pets = DB::table('pets')->paginate(2);
		$pets = Pet::orderBy('type', 'ASC')->get();
		// Set View
        return View::make('pet.index')
                        ->with('pets', $pets);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pet.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
            'type' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('pet/create')
                            ->withErrors($validator);
        } else {
            // store
            $pet = new Pet;
            $pet->type = Input::get('type');
            $pet->save();

            // redirect
            Session::flash('message', 'Added Pet Type successfully!');
            return Redirect::to('pet');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pet = Pet::find($id);

        // show the view and pass the nerd to it
        return View::make('pet.show')
            ->with('pet_detail', $pet);
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
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		echo $id;exit;
		/*// delete
        $pet = Pet::find($id);
        $pet->delete();

        // redirect
        Session::flash('message', 'Pet type deleted successfully');
        return Redirect::to('pet'); */
	}
	
	public function services($id){
		$services = Pet::find($id)->services;
		
		$pet = Pet::select('type')->find($id);
		$petType = $pet->type;
		
		return View::make('pet.service')
			->with(array(
				'services'=>$services,
				'petType'=>$petType
			));
	}
	
}
