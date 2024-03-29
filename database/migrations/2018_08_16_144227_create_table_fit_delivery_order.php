<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFitDeliveryOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('trx_fit_delivery_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('do_no');
            $table->integer('do_type_id')->unsigned();
            $table->date('do_date');
            $table->string('team_code')->nullable();
            $table->string('sender')->nullable();
            $table->string('tel_no')->nullable();
            $table->string('department_code')->nullable();
            $table->boolean('is_draft')->nullable()->default(true);
            $table->integer('company_id')->unsigned()->nullable();

            $table->timestamps();
        });

        Schema::create('trx_fit_delivery_order_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trx_fit_delivery_order_id')->unsigned();
            $table->string('customer_no')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('tel_no')->nullable();
            $table->string('attn')->nullable();

            $table->timestamps();
            $table->foreign('trx_fit_delivery_order_id')->references('id')->on('trx_fit_delivery_orders')->onDelete('cascade');
        });

        Schema::create('trx_fit_delivery_order_despatchs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trx_fit_delivery_order_id')->unsigned();
            $table->integer('despatch_staff')->nullable();
            // $table->datetime('despatch_time')->nullable();
            $table->date('despatch_time')->nullable();
            $table->text('instruction')->nullable();
            $table->string('related_so')->nullable();
            $table->string('to_area')->nullable();
            $table->text('to_delivery')->nullable();
            $table->text('to_collect')->nullable();
            $table->string('received_by')->nullable();
            // $table->datetime('date_received')->nullable();
            $table->date('date_received')->nullable();

            $table->timestamps();
            $table->foreign('trx_fit_delivery_order_id')->references('id')->on('trx_fit_delivery_orders')->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('trx_fit_delivery_order_despatchs');
        Schema::dropIfExists('trx_fit_delivery_order_customers');
        Schema::dropIfExists('trx_fit_delivery_orders');

        Schema::enableForeignKeyConstraints();
    }
}
