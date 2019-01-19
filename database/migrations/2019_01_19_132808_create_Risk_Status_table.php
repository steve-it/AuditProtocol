<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRiskStatusTable extends Migration {

	public function up()
	{
		Schema::create('Risk_Status', function(Blueprint $table) {
			$table->increments('id', true)->primary();
			$table->timestamps();
			$table->softDeletes();
			$table->string('libelle', 255);
			$table->integer('value')->default('11');
		});
	}

	public function down()
	{
		Schema::drop('Risk_Status');
	}
}