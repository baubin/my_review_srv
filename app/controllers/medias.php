<?php

class medias extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$medias = DB::table('media')
			->get();
		return json_encode($medias);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$input = DB::table('media')
			->insert(array(
				'type'	=> Input::get('type'),
				'name'	=> Input::get('name'),
				'url'	=> Input::get('url')
			));

		return json_encode($input);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return "store";
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$media = DB::table('media')
			->where('id', $id)
			->first();
		return json_encode($media);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "edit ".$id;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = DB::table('media')
            ->where('id', $id)
            ->update(array(
            	'type'	=> Input::get('type'),
            	'name'	=> Input::get('name'),
            	'url'	=> Input::get('url')
            ));

		return $input;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "destroy ".$id;
	}

}