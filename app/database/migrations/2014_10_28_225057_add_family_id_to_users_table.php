<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddFamilyIdToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{

            $table->integer('family_id')->unsigned()->index()->nullable();
            $table->foreign('family_id')
                ->references('id')->on('families')
                ->onUpdate('cascade')
                ->onDelete('restrict');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropForeign('users_family_id_foreign');
            $table->dropColumn('family_id');
		});
	}

}
