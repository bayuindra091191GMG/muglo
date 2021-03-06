<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function(Blueprint $table)
		{
			$table->string('id', 36)->primary();
			$table->string('user_id', 36)->index('FK_transactions_user_id_users_idx');
			$table->integer('payment_method_id')->index('FK_transactions_payment_method_id_payment_methods_idx');
			$table->string('invoice', 30)->nullable();
			$table->integer('payment_code')->nullable();
			$table->float('total_payment', 10, 0)->nullable();
			$table->float('total_price', 10, 0)->nullable();
			$table->integer('total_weight')->nullable();
			$table->string('address_name', 45)->nullable();
			$table->string('phone', 20)->nullable();
			$table->integer('province_id')->nullable()->index('FK_transactions_province_id_provinces_idx');
			$table->string('province_name', 30)->nullable();
			$table->integer('city_id')->nullable()->index('FK_transactions_city_id_cities_idx');
			$table->string('city_name', 30)->nullable();
			$table->integer('subdistrict_id')->nullable();
			$table->string('subdistrict_name', 30)->nullable();
			$table->string('postal_code', 10)->nullable();
			$table->text('address_detail')->nullable();
			$table->string('tracking_code', 45)->nullable();
			$table->string('courier', 50)->nullable();
			$table->string('courier_code', 20)->nullable();
			$table->string('delivery_type', 50)->nullable();
			$table->string('delivery_type_code', 20)->nullable();
			$table->float('delivery_fee', 10, 0)->nullable();
			$table->float('admin_fee', 10, 0)->nullable();
			$table->dateTime('delivery_date')->nullable();
			$table->dateTime('finish_date')->nullable();
			$table->text('reject_note')->nullable();
			$table->integer('status_id')->nullable()->index('FK_transactions_status_id_statuses_idx');
			$table->string('created_by', 36)->nullable();
			$table->dateTime('created_on')->nullable();
			$table->string('modified_by', 36)->nullable();
			$table->dateTime('modified_on')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('transactions');
	}

}
