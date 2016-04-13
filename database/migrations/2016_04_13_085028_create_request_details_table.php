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
            $table->string('serial_from_supplier')->unique();
            $table->timestamp('manufacture_date');
            $table->timestamp('expiry_date');
            $table->double('price');
            $table->text('note');
            $table->timestamps();
        });

        // Schema::table('request_details', function(Blueprint $table) {
        //     $table->foreign('request_code')
        //           ->references('code')
        //           ->on('requests');
            
        //     $table->foreign('supplier_id')
        //           ->references('supplier_id')
        //           ->on('suppliers');
        // });
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
