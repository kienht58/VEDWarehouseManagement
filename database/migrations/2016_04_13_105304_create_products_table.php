<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('supplier_id')->unsigned();
            $table->string('serial');
            $table->string('serial_from_supplier');
            $table->integer('status')->unsigned();
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories');
            // $table->foreign('supplier_id')
            //       ->references('supplier_id')
            //       ->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
