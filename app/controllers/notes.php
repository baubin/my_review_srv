<?php

class notes extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$notes = DB::table('note')
			->get();
		return json_encode($notes);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$input = DB::table('note')
			->insert(array(
				'media_id'	=> Input::get('media_id'),
				'title'	=> Input::get('title'),
				'content'	=> Input::get('content')
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
		$note = DB::table('note')
			->where('id', $id)
			->first();
		return json_encode($note);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function filter($id)
	{
		$notes = DB::table('note')
			->where('media_id', $id)
			->get();
		return json_encode($notes);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = DB::table('note')
            ->where('id', $id)
            ->update(array(
				'media_id'	=> Input::get('media_id'),
				'title'	=> Input::get('title'),
				'content'	=> Input::get('content')
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
		$input = DB::table('note')
            ->where('id', $id)
            ->delete();

		return $input;
	}

}