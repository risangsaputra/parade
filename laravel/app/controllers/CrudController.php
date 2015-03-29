<?php

class CrudController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//mengambil semua data
		$cruds = Crud::all();

		//menampilkan tampilan dan data
		return View::make('cruds.index')
			->with('cruds', $cruds);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('cruds.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
        // read more on validation at http://laravel.com/docs/validation
     $rules = array(
     	'name' 		 => 'required' ,
     	'email'		 => 'required|email',
     	'level_user' => 'required',
     	'username' 	 => 'required|min:8',
     	'password' 	 => 'required'
     	);
     	
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('cruds/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $crud = new Crud;
            $crud->name       	 = Input::get('name');
            $crud->email     	 = Input::get('email');
            $crud->level_user	 = Input::get('level_user');
            $crud->username      = Input::get('username');
            $crud->password      = Hash::make(Input::get('password'));
            
            $crud->save();

            // redirect
            Session::flash('message', 'Berhasil menambahkan Data');
            return Redirect::to('cruds');
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
        // get the nerd
        $crud = Crud::find($id);

        // show the view and pass the nerd to it
        return View::make('cruds.show')
            ->with('crud', $crud);
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		{
        // get the nerd
        $crud = Crud::find($id);

        // show the edit form and pass the nerd
        return View::make('cruds.edit')
            ->with('crud', $crud);
    	}
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
        'name' 		 => 'required' ,
     	'email'		 => 'required|email',
     	'level_user' => 'required',
     	'username' 	 => 'required|min:8',
     	'password' 	 => 'required'
     	);
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('cruds/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $crud = Crud::find($id);
            $crud->name       	 = Input::get('name');
            $crud->email     	 = Input::get('email');
            $crud->level_user	 = Input::get('level_user');
            $crud->username      = Input::get('username');
            
            
            $crud->save();

            

            // redirect
            Session::flash('message', 'Successfully updated data!');
            return Redirect::to('cruds');
        }
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
        $crud = Crud::find($id);
        $crud->delete();

        // redirect
        Session::flash('message', 'Successfully deleted data!');
        return Redirect::to('cruds');
    }


}
