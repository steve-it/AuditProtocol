<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVulnerabiliteTable extends Migration {

	public function up()
	{
		Schema::create('Vulnerabilite', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->softDeletes();
			$table->integer('menaces_id')->unsigned()->default('11');
			$table->integer('risk_status_id')->unsigned()->default('11');
			$table->text('tools_methods');
			$table->text('description');
			$table->text('recommandation');
			$table->text('consequence');
			$table->string('nom');
			$table->integer('impact')->nullable();
			$table->integer('probabilite')->nullable();
			$table->integer('value_risk')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('Vulnerabilite');
	}
}