<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create("posts",function($table){
	
			$table->increments('id');
			$table->string('title');
			$table->string('alias');
			$table->string('author');
			$table->string('content');
			$table->string('tag');
			$table->date('crate_at');
			$table->date('update_at');
			$table->integer('caId');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		  Schema::drop('posts');
	}

}
