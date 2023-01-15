<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFunds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('funds', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('image')->nullable();
        //     $table->string('user_id');
        //     $table->string('date');
        //     $table->string('value');
        //     $table->boolean('is_disabled');
        //     $table->string('description');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funds');
    }
}
