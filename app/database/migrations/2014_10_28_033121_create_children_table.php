<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChildrenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('children', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('photo')->nullable();
			$table->date('dob')->nullable();
			$table->integer('weekly_tuition')->default(0);
			$table->integer('family_id')->unsigned()->index();
			$table->foreign('family_id')
                ->references('id')->on('families')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
		Schema::drop('children');
	}

}
