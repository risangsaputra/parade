<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRisangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('risang', function(Blueprint $table)
		{
			 $table->increments('id');

            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('level_user',255);
            $table->string('username',255);
            $table->string('password',255);

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
        Schema::drop('risang');
    }

}