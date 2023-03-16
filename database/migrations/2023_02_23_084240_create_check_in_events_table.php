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
        Schema::create('check_in_events', function (Blueprint $table) {
            $table->id();
            $table->string('event_id');
            $table->string('event_name');
            $table->string('member_code')->nullable(); //กรณีไม่ได้เป็นสมาชิกจะยังไม่มี member_code ให้เจ้าหน้ากรอกข้อมูล
            $table->string('member_firstname');
            $table->string('member_lastname');
            $table->string('member_telephone');
            $table->string('member_career')->nullable();
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
        Schema::dropIfExists('check_in_events');
    }
};