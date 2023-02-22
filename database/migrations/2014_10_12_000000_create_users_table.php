<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->id();
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at');
            // $table->string('password');
            // $table->rememberToken();
            // $table->foreignId('current_team_id');
            // $table->string('profile_photo_path', 2048);
            // $table->timestamps();

            $table->string('id')->primary();
            $table->string('uuid')->nullable();
            $table->string('session')->nullable();
            $table->string('member_code')->nullable();
            $table->string('member_reference_code')->nullable();
            $table->string('member_reference_recheck')->nullable();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('person_id')->nullable();
            $table->string('person_id_image')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('password_key')->nullable();
            $table->string('telephone')->nullable();
            $table->string('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('sub_district')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('roles')->nullable();
            $table->string('member_type')->nullable();
            $table->string('status')->nullable();
            $table->string('enabled')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('apple_id')->nullable();
            $table->string('image_evidence_payment')->nullable();
            $table->string('crypto_wallet_id')->nullable();
            $table->string('crypto_wallet_of_recommender')->nullable();
            $table->string('created')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};