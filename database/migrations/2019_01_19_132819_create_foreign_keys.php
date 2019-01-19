<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Menaces', function(Blueprint $table) {
			$table->foreign('protocoles_id')->references('id')->on('Protocoles')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Vulnerabilite', function(Blueprint $table) {
			$table->foreign('menaces_id')->references('id')->on('Menaces')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Vulnerabilite', function(Blueprint $table) {
			$table->foreign('risk_status_id')->references('id')->on('Risk_Status')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('Menaces', function(Blueprint $table) {
			$table->dropForeign('Menaces_protocoles_id_foreign');
		});
		Schema::table('Vulnerabilite', function(Blueprint $table) {
			$table->dropForeign('Vulnerabilite_menaces_id_foreign');
		});
		Schema::table('Vulnerabilite', function(Blueprint $table) {
			$table->dropForeign('Vulnerabilite_risk_status_id_foreign');
		});
	}
}