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
        Schema::create('parcel', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_id');
            $table->string('sender_name')->nullable();
            $table->string('sender_address')->nullable();
            $table->string('sender_contact')->nullable();
            $table->string('reci_name')->nullable();
            $table->string('reci_address')->nullable();
            $table->string('reci_contact')->nullable();
            $table->string('status')->nullable();
            $table->string('pickup_date')->nullable();
            $table->string('exp_date')->nullable();
            $table->string('dep_date')->nullable();
            $table->string('total_price')->nullable();
            $table->string('branch_pro')->nullable();
            $table->string('pickup_branch')->nullable();
            $table->string('carrier_no')->nullable();
            $table->string('unique_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcel');
    }
};
