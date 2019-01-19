<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenacesTable extends Migration {

	public function up()
	{
		Schema::create('Menaces', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('nom', 255);
			$table->text('description');
			$table->integer('protocoles_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Menaces');
	}
}