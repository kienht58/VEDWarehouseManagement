<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('code')->unique()->unsigned();
            $table->integer('request_code')->unsigned();
            $table->integer('transaction_type');
            $table->integer('warehouse_id')->unsigned();
            $table->text('note');
            $table->timestamps();
        });

        // Schema::table('transactions', function(Blueprint $table) {
        //     $table->foreign('request_code')
        //           ->references('code')
        //           ->on('requests');
        //     $table->foreign('transaction_type')
        //           ->references('id')
        //           ->on('dictionaries');
        //     $table->foreign('warehouse_id')
        //           ->references('warehouse_id')
        //           ->on('warehouses');
        // });
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
