<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentMethodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payment_methods', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('description', 50);
			$table->float('fee', 10, 0)->nullable();
			$table->string('type', 20)->nullable();
			$table->integer('status_id')->default(1)->index('FK_payment_methods_status_id_statuses_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('payment_methods');
	}

}
