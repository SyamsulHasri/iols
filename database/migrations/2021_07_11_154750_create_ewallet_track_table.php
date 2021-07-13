<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEwalletTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ewallet_track', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->constrained('users');
            $table->decimal('cash_in', $precision = 8, $scale = 2)->default(0.00);
            $table->decimal('cash_out', $precision = 8, $scale = 2)->default(0.00);
            $table->string('cashout_request_date')->nulable();
            $table->boolean('cashout_approval')->default(0);
            $table->string('cashout_approval_date')->nulable();
            $table->string('cashout_approval_maker')->nulable();
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
        Schema::dropIfExists('ewallet_track');
    }
}
