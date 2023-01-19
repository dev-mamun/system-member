<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RaffleTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raffle_ticket', function (Blueprint $table) {
            $table->id();
            $table->string('fund_date')->nullable();
            $table->string('amount')->nullable();
            $table->string('ticket_number')->nullable();
            $table->string('status')->nullable();
            $table->string('raffle_date')->nullable();
            $table->string('outcome')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
