@extends('layout.master')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="page-header">Daftar Siswa <a href="{{ route('siswa.create') }}" class="btn btn-primary"> <i class="glyphicon glyphicon-plus-sign"></i> Tambah</a> </h1>

			<table class="table">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Umur</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					@foreach($siswa as $s)
					<tr>
						<th>{{ $s->nama }}</th>
						<th>{{ $s->umur }} tahun</th>
						<th>{{ $s->gender }}</th>
						<th>{{ $s->alamat }}</th>
						<th>
							<a href="{{ route('siswa.edit', $s->id) }}" class="btn btn-warning btn-xs btn-block"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
							<form action="{{ route('siswa.destroy', $s->id) }}" method="post">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">								
								<input type="hidden" name="_method" value="delete">								
								<button type="submit" class="btn btn-danger btn-xs btn-block"><i class="glyphicon glyphicon-trash"></i> Delete</a>
							</form>
						</th>
					</tr>
					@endforeach
				</tbody>
			</table>

			<div class="center-block">
				{{ $siswa->appends(Request::except('page'))->links() }}
			</div>
		</div>
	</div>
@stop