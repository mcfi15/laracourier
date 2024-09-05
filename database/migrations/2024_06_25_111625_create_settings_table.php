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
        if (!Schema::hasTable('settings')) {
            Schema::create('settings', function (Blueprint $table) {
                $table->id();
                $table->string('website_name')->nullable();
                $table->string('website_url')->nullable();
                $table->string('page_title')->nullable();
                $table->string('meta_keywords', 500)->nullable();
                $table->string('meta_description', 500)->nullable();
                $table->string('address', 500)->nullable();
                $table->string('phone')->nullable();
                $table->string('email')->nullable();
                $table->string('logo')->nullable();
                $table->string('favicon')->nullable();
                $table->timestamps();
            });
        } else {
            Schema::table('settings', function (Blueprint $table) {
                $table->string('website_name')->nullable()->change();
                $table->string('website_url')->nullable()->change();
                $table->string('page_title')->nullable()->change();
                $table->string('meta_keywords', 500)->nullable()->change();
                $table->string('meta_description', 500)->nullable()->change();
                $table->string('address', 500)->nullable()->change();
                $table->string('phone')->nullable()->change();
                $table->string('email')->nullable()->change();
                $table->string('logo')->nullable()->change();
                $table->string('favicon')->nullable()->change();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
