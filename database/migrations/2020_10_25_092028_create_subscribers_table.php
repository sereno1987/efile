<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->on('users')->references('id');
            $table->unsignedBigInteger('plan_id')->index();
            $table->foreign('plan_id')->on('plans')->references('id');
            $table->integer('download_limit');
            $table->integer('download_count');
            $table->float('subscribe_payment');
            $table->dateTime('subscribe_expires_at')->index();
            $table->dateTime('subscribe_created_at')->index();
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
        Schema::dropIfExists('subscriber');
    }
}
