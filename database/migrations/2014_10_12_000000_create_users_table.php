<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('name');
            $table->string('sponsor_id'); //direct sponsor id
            $table->string('leader_id'); //leader id distributor lvl 0
            $table->integer('level');
            $table->string('member_type');
            $table->string('email')->unique();
            $table->string('phone_no');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('register_date');
            $table->boolean('user_status')->default(0);
            $table->date('activation_date')->nullable();
            $table->string('first_purchase_amount');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
