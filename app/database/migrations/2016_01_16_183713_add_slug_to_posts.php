<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToPosts extends Migration
{
	public function up()
	{
		Schema::table('posts', function(Blueprint $table)
		{
			$table->string('slug')->unique();
		});
	}

	public function down()
	{
		Schema::table('posts', function(Blueprint $table)
		{
			$table->dropColumn('slug');
		});
	}
}