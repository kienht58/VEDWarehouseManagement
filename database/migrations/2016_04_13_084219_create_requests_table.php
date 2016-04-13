<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('code')->unique()->unsigned();
            $table->integer('type');
            $table->integer('status');
            $table->text('note');
            $table->timestamps();
        });

        // Schema::table('requests', function (Blueprint $table) {
        //     $table->foreign('type')
        //           ->references('id')
        //           ->on('dictionaries');

        //     $table->foreign('status')
        //           ->references('id')
        //           ->on('dictionaries');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('requests');
    }
}
