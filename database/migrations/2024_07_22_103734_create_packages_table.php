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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parcel_id');
            $table->string('quantity')->nullable();
            $table->string('type')->nullable();
            $table->string('width')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('length')->nullable();
            $table->string('description')->nullable();
            $table->string('price')->nullable();
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
        Schema::dropIfExists('packages');
    }
};
