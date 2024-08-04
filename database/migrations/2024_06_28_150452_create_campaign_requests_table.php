<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('campaign_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('chef_id');
            $table->string('campaign_name');
            $table->string('campaign_description');
            $table->string('campaign_meal');
            $table->string('campaign_date');
            $table->string('campaign_startTime');
            $table->string('campaign_endTime');
            $table->string('status')->default('pending'); // 'pending', 'accepted', 'rejected'
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('chef_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('campaign_requests');
    }
};
