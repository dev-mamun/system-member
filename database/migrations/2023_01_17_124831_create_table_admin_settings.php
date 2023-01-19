<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdminSettings extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_settings', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('value')->nullable();
            $table->timestamps();
        });

        DB::table('admin_settings')->insert([
            ['description' => 'JACKPOT_PRIZE', 'value' => ''],
            ['description' => 'BONUS_ITEM', 'value' => ''],
            ['description' => 'BONUS_ITEM_CLAIM_DATE', 'value' => ''],
            ['description' => 'RAFFLE_WINNER', 'value' => ''],
            ['description' => 'BONUS_ITEM_CLAIM_DATE', 'value' => ''],
            ['description' => 'BONUSES_DRB', 'value' => ''],
            ['description' => 'BONUSES_SPIN_BONUS', 'value' => ''],
            ['description' => 'PAYOUT_REQUEST_MINIMUM_DAILY_SPIN', 'value' => ''],
            ['description' => 'PAYOUT_REQUEST_MINIMUM_BONUSES', 'value' => ''],
            ['description' => 'PAYOUT_SCHEDULE_FROM_DAY', 'value' => ''],
            ['description' => 'PAYOUT_SCHEDULE_TO_DAY', 'value' => ''],
            ['description' => 'PAYOUT_SCHEDULE_FROM_TIME', 'value' => ''],
            ['description' => 'PAYOUT_SCHEDULE_TO_TIME', 'value' => ''],
            ['description' => 'MODE_OF_PAYMENT', 'value' => ''],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_admin_settings');
    }
}
