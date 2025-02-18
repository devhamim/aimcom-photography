<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contect_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('number');
            $table->string('address');
            $table->string('partner_name');
            $table->string('instagram_handle');
            $table->string('date_of_event');
            $table->string('budget');
            $table->string('guest_count');
            $table->string('working_planner');
            $table->string('stage_finding');
            $table->string('drew_work');
            $table->string('hear_me');
            $table->string('referral');
            $table->string('subject');
            $table->longText('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contect_messages');
    }
};
