<?php

class ServiceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$services = Service::orderBy('type', 'ASC')->get();
		// Set View
        return View::make('service.index')
                        ->with('services', $services);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('service.create');
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
            return Redirect::to('service/create')
                            ->withErrors($validator);
        } else {
            // store
            $service = new Service;
            $service->type = Input::get('type');
            $service->save();

            // redirect
            Session::flash('message', 'Added Service Type successfully!');
            return Redirect::to('service');
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
		$service = Service::find($id);

        // show the view and pass the nerd to it
        return View::make('service.show')
            ->with('service_detail', $service);
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
	public function destroy($id)
	{
		// delete
        $service = Service::find($id);
        $service->delete();

        // redirect
        Session::flash('message', 'Service type deleted successfully');
        return Redirect::to('service');
	}
	
	public function pets($id){
		$pets = Service::find($id)->pets;	
		$service = Service::select('type','id')->find($id);
		$serviceType = $service->type;		
		$serviceId = $service->id;		
		return View::make('service.pet')
			->with(array(
				'pets'=>$pets,
				'serviceType'=>$serviceType,
				'serviceId'=>$serviceId
			));
	}
	
	public function assign($id = NULL){
		$services = Service::orderBy('type', 'ASC')->lists('type','id');
		if(NULL == $id){
			$key = array_keys($services);
			$id = $key[0];			
		}
		$services1 = Service::find($id)->pets;
		$pets = Pet::orderBy('type', 'ASC')->get();
		
		return View::make('service.assign')
			->with(array('id'=>$id,'services'=>$services,'services_a'=>$services1,'pets'=>$pets));
	}
	
	public function allocate(){
		$id = Input::get('service');
		$petIds = Input::get('pets');
		$services = Service::find($id);
		$rules = array(
            'pets' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('service/assign/'.$id)
                            ->withErrors($validator);
        } else {
		$result = $services->pets()->sync($petIds, true); // 2nd param = detach		
		// redirect
        Session::flash('message', 'Services assigned successfully');
        return Redirect::to("service/assign/{$id}");
		}
	}
}
