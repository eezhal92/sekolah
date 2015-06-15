<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSiswa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('siswa', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->integer('umur');
			$table->enum('gender', ['laki_laki', 'perempuan']);
			$table->text('alamat');
			$table->string('foto');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('siswa');
	}

}
