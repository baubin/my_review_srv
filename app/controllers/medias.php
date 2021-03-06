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
				'url'	=> Input::get('url'),
				'description'	=> Input::get('description')
			));

		return json_encode($input);
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
            	'url'	=> Input::get('url'),
				'description'	=> Input::get('description')
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
		$input = DB::table('media')
            ->where('id', $id)
            ->delete();

		return $input;
	}

}