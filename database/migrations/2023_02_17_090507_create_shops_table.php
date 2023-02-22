<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->string('id')->nullable();
            $table->string('uuid')->nullable();
            $table->string('name')->nullable();
            $table->string('detail')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('address')->nullable();
            $table->string('sub_district')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('images')->nullable();
            $table->string('shop_condition')->nullable();
            $table->string('is_open')->nullable();
            $table->string('is_approve')->nullable();
            $table->string('is_start')->nullable();
            $table->string('last_active')->nullable();
            $table->string('member')->nullable();
            $table->string('shop_type')->nullable();
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
        Schema::dropIfExists('shops');
    }
};