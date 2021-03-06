<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('banners', function(Blueprint $table)
		{
			$table->foreign('created_by', 'FK_banners_created_by_user_admins')->references('id')->on('user_admins')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('product_id', 'FK_banners_product_id_products')->references('id')->on('products')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('status_id', 'FK_banners_status_id_statuses')->references('id')->on('statuses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('updated_by', 'FK_banners_updated_by_user_admins')->references('id')->on('user_admins')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('banners', function(Blueprint $table)
		{
			$table->dropForeign('FK_banners_created_by_user_admins');
			$table->dropForeign('FK_banners_product_id_products');
			$table->dropForeign('FK_banners_status_id_statuses');
			$table->dropForeign('FK_banners_updated_by_user_admins');
		});
	}

}
