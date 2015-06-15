<?php

class SiswaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$siswa = Siswa::paginate(1);

		return View::make('siswa.index', compact('siswa'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('siswa.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), [
			'nama'	=> 'required|min:5',
			'umur'	=> 'required|integer',
			'alamat'=> 'required|min:5',
			'gender'=> 'required|in:laki_laki,perempuan',
			'foto'	=> 'required|max:700|mimes:jpeg,png', // maksimal 700kb dengan ekstensi jpeg atau png
		]);

		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$siswa = Siswa::create(Input::all());

		$foto = Input::file('foto');
		$folder = 'uploads/photos/';
		$path = $folder . $foto->getClientOriginalName();
		
		$siswa->foto = $path;
		$siswa->save();

		$foto->move(public_path($folder), $foto->getClientOriginalName()); // pindah file ke folder public
		
		if(!$siswa)
		{
			return Redirect::route('siswa.index')->with('error', 'Maaf, gagal menambah data siswa. Mohon Coba lagi.');			
		}
		
		return Redirect::route('siswa.index')->with('success', 'Berhasil menambah data siswa.');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$siswa = Siswa::findOrFail($id);

		return View::make('siswa.show', compact('siswa'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$siswa = Siswa::findOrFail($id);
		
		return View::make('siswa.edit', compact('siswa'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$validator = Validator::make(Input::all(), [
			'nama'	=> 'required|min:5',
			'umur'	=> 'required|integer',
			'alamat'=> 'required|min:5',
			'gender'=> 'required|in:laki_laki,perempuan',
			'foto'	=> 'sometimes|max:700|mimes:jpeg,png',
		]);

		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$siswa = Siswa::findOrFail($id);

		// if(!Input::hasFile('foto')) {
		// 	dd(Input::all());
		// 	$siswa->update(Input::all());			
		// } else {
		// 	$siswa->nama = Input::get('nama');
		// 	$siswa->umur = Input::get('umur');
		// 	$siswa->alamat = Input::get('alamat');
		// 	$siswa->gender = Input::get('gender');
			
		// 	$foto = Input::file('foto');
		// 	$folder = 'uploads/photos/';
		// 	$path = $folder . $foto->getClientOriginalName();
			
		// 	$siswa->foto = $path;
		// 	$siswa->save();

		// 	$foto->move(public_path($folder), $foto->getClientOriginalName()); // pindah file ke folder public
		// }

		$siswa->nama = Input::get('nama');
		$siswa->umur = Input::get('umur');
		$siswa->alamat = Input::get('alamat');
		$siswa->gender = Input::get('gender');
		
		if(Input::hasFile('foto')) { // chek apakah foto diganti atau tidak
			$photo_path = public_path($siswa->foto);			

			if( File::exists($photo_path) ) { // cek apakah foto tsb ada				
				File::delete($photo_path); // hapus foto lama
			}
			
			$foto = Input::file('foto');
			$folder = 'uploads/photos/';
			$path = $folder . $foto->getClientOriginalName();
			
			$siswa->foto = $path;
			$foto->move(public_path($folder), $foto->getClientOriginalName()); // pindah file ke folder public
		}

		$siswa->save();

		if(!$siswa)
		{
			return Redirect::route('siswa.index')->with('error', 'Gagal memperbaharui data siswa. Mohon coba lagi.');
		}

		return Redirect::route('siswa.index')->with('success', 'Berhasil memperbaharui data siswa.');
	
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$siswa = Siswa::findOrFail($id);

		$photo_path = public_path($siswa->foto);

		if( File::exists($photo_path) ) { // cek apakah foto tsb ada				
			File::delete($photo_path); // hapus foto lama
		}

		if($siswa->delete()) {
			return Redirect::route('siswa.index')->with('success', 'Berhasil menghapus data siswa.');			
		}
		
	}

}
