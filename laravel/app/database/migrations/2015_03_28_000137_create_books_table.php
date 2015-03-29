<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
        //create table in the database
        Schema::create('books',function(Blueprint $table)
        {
            $table->increments("id");
            $table->string('isbn');
            $table->string('title');
            $table->string('author');
            $table->string('publisher');
            $table->integer('language');
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
        //drop table if exist in the database
        Schema::drop('books');
 }
}