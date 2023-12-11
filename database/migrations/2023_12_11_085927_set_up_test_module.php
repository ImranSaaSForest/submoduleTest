<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class SetUpTestModule extends Migration
{
	public function up()
	{
		// Schema::create('test', function(Blueprint $table) {
		// 	$table->bigIncrements('id');
		// 	$table->timestamps();
		// 	$table->softDeletes();
		// });
	}
	
	public function down()
	{
		// Schema::dropIfExists('test');
	}
}
