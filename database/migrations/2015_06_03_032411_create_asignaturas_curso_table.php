<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturasCursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asisgnatura_cursos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('curso_id')->unsigned();
			$table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
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
		Schema::drop('asisgnatura_curso');
	}

}
