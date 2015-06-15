<?php

class Siswa extends Eloquent
{
	
	/**
	 * definisi nama table yang digunakan oleh model
	 *
	 * @var string
	 */
	protected $table = 'siswa';

	/**
	 * definisi kolom table yang boleh di isi
	 *
	 * @var array
	 */
	protected $fillable = ['nama', 'umur', 'alamat', 'gender', 'foto'];

	// public function getGenderAttribute()
	// {
	// 	return ($this->gender == "laki_laki") ? 'Laki-laki' : 'Perempuan';
	// }
}