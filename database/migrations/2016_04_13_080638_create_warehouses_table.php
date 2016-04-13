<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('warehouses', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('warehouse_id')->unique()->unsigned();
            $table->string('name');
            $table->string('address');
            $table->string('contact');
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
        Schema::drop('warehouses');
    }
}
