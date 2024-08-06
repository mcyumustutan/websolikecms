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
        Schema::create('sms_lists', function (Blueprint $table) {
            $table->id();
            $table->string('tamad');
            $table->string('telefon');
            $table->date('dogumtarihi');
            $table->text('not')->nullable();
            $table->char('is_approved')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sms_lists');
    }
};
