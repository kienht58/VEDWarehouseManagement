<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('request_code')->unsigned();
            $table->integer('supplier_id')->unsigned();
            $table->integer('quantity');
            $table->timestamp('date');
            $table->double('cost_per_unit');
            $table->text('note');
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
        Schema::drop('request_details');
    }
}
