<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');		
			$table->string('name', 80);
			$table->string('quickoverview', 170);
			$table->string('mainsentence', 70);
			$table->text('description');
			$table->text('addinformation');
			$table->decimal('price');
			$table->decimal('sale');
			$table->integer('prodqtd');
			$table->boolean('featured')->nullable();
			$table->boolean('recommend')->nullable();
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
		Schema::drop('products');
	}

}
