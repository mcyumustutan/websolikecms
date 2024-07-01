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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('img_url', 255)->default(0);
            $table->string('info', 255)->default(0);
            $table->integer('position')->default(0);
            $table->integer('is_publish')->default(0);
            $table->text('style')->nullable();
            $table->string('external_link', 255)->nullable();
            $table->char('lang', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
