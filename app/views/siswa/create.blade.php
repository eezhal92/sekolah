@extends('layout.master')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-2">
		<h1 class="page-header">Menambah Data Siswa</h1>

		<form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group {{ ($errors->first('nama')) ? 'has-error' : '' }}">
				<label for="nama">Nama</label>
				<input type="text" name="nama" class="form-control" value="{{ Input::old('nama') }}">
				{{ ($errors->first('nama')) ? $errors->first('nama', '<span class="help-block">:message</span>') : '' }}
			</div>

			<div class="form-group {{ ($errors->first('umur')) ? 'has-error' : '' }}">
				<label for="umur">Umur</label>
				<input type="text" name="umur" class="form-control" value="{{ Input::old('umur') }}">
				{{ ($errors->first('umur')) ? $errors->first('umur', '<span class="help-block">:message</span>') : '' }}
			</div>

			<div class="form-group {{ ($errors->first('umur')) ? 'has-error' : '' }}">
				<label for="gender">Gender</label>
				<select name="gender" class="form-control">
					<option value="laki_laki" selected>Laki-laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
				{{ ($errors->first('umur')) ? $errors->first('umur', '<span class="help-block">:message</span>') : '' }}
			</div>

			<div class="form-group {{ ($errors->first('alamat')) ? 'has-error' : '' }}">
				<label for="alamat">Alamat</label>
				<textarea name="alamat" rows="3" class="form-control">{{ Input::old('alamat') }}</textarea>
				{{ ($errors->first('alamat')) ? $errors->first('alamat', '<span class="help-block">:message</span>') : '' }}
			</div>

			<div class="form-group {{ ($errors->first('foto')) ? 'has-error' : '' }}">
				<label for="foto">Foto</label>
				<input type="file" name="foto">
				{{ ($errors->first('foto')) ? $errors->first('foto', '<span class="help-block">:message</span>') : '' }}
			</div>
			
			<hr>
			
			<div class="form-group">				
				<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
			</div>
		</form>
	</div>
</div>

@stop