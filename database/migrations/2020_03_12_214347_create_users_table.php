<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

	 // REPRESENTAÇÃO DO MODELO DO BANCO DE DADOS EM CÓDIGO PHP

	 // NÃO PRECISA REPLICAR O BANCO

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');

			// PEOPLE DATA
			$table->char('cpf', 11)->unique()->nullable();
			$table->string('name', 50);
			$table->char('phone', 11);
			$table->date('birth')->nullable();
			$table->char('gender', 1)->nullable();
			$table->text('notes')->nullable();

			// AUTH DATA
			$table->string('email', 80)->unique();
			$table->string('password', 254)->nullable();

			// permission
			$table->string('status')->default('active');
			$table->string('permission')->default('app.user');

			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}
}
