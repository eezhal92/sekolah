@extends('layout.master')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-2">
		<h1 class="page-header">Merubah Data Siswa</h1>

		{{ Form::model($siswa, ['route' => ['siswa.update', $siswa->id], 'method' => 'put', 'files' => true]) }}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group {{ ($errors->first('nama')) ? 'has-error' : '' }}">
				<label for="nama">Nama</label>
				{{ Form::text('nama', null, ['class' => 'form-control']) }}
				{{ ($errors->first('nama')) ? $errors->first('nama', '<span class="help-block">:message</span>') : '' }}
			</div>

			<div class="form-group {{ ($errors->first('umur')) ? 'has-error' : '' }}">
				<label for="umur">Umur</label>
				{{ Form::text('umur', null, ['class' => 'form-control']) }}
				{{ ($errors->first('umur')) ? $errors->first('umur', '<span class="help-block">:message</span>') : '' }}
			</div>

			<div class="form-group {{ ($errors->first('umur')) ? 'has-error' : '' }}">
				<label for="gender">Gender</label>
				{{ Form::select('gender', ['laki_laki' => 'Laki-laki', 'perempuan' => 'Perempuan'], $siswa->gender, ['class' => 'form-control']) }}
				{{ ($errors->first('gender')) ? $errors->first('gender', '<span class="help-block">:message</span>') : '' }}
			</div>

			<div class="form-group {{ ($errors->first('alamat')) ? 'has-error' : '' }}">
				<label for="alamat">Alamat</label>
				{{ Form::textarea('alamat', null, ['rows' => 3, 'class' => 'form-control']) }}
				{{ ($errors->first('alamat')) ? $errors->first('alamat', '<span class="help-block">:message</span>') : '' }}
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<img src="{{ asset($siswa->foto) }}" width="160" height="160" alt="foto siswa" class="img-img-responsive">
				</div>
				<div class="col-md-6">
					<div class="form-group {{ ($errors->first('foto')) ? 'has-error' : '' }}">
						<label for="foto">Foto</label>
						<input type="file" name="foto">
						{{ ($errors->first('foto')) ? $errors->first('foto', '<span class="help-block">:message</span>') : '' }}
					</div>	
				</div>
			</div>			
			
			<hr>
			
			<div class="form-group">				
				<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
			</div>
		{{ Form::close() }}
	</div>
</div>

@stop