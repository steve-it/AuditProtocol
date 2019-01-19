<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProtocolesTable extends Migration {

	public function up()
	{
		Schema::create('Protocoles', function(Blueprint $table) {
			$table->increments('id', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('nom', 255);
			$table->text('description');
		});
	}

	public function down()
	{
		Schema::drop('Protocoles');
	}
}