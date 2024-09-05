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
        Schema::create('track', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parcel_id');
            $table->string('tracking_id')->nullable();
            $table->string('updated_date')->nullable();
            $table->string('updated_time')->nullable();
            $table->string('location')->nullable();
            $table->string('cstatus')->nullable();
            $table->string('remark')->nullable();
            $table->string('unique_id')->nullable();

            $table->foreign('parcel_id')->references('id')->on('parcel')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('track');
    }
};
