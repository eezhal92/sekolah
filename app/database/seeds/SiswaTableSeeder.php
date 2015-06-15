<?php

class SiswaTableSeeder extends Seeder
{
	
	public function run()
	{

		Siswa::truncate(); // Hapus semua data di table

		$datas = [
			['nama' => 'Fulan bin Fulan', 'umur' => 17, 'gender' => 'laki_laki', 'alamat' => 'Birobuli Utara', 'foto' => '/uploads/photos/fulan.jpg'],
			['nama' => 'Fulanah binti Fulan', 'umur' => 16, 'gender' => 'perempuan', 'alamat' => 'Birobuli Utara', 'foto' => '/uploads/photos/fulanah.jpg'],			
		];

		foreach ($datas as $data) {
			Siswa::create($data);
		}
	}
}