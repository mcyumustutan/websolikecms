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
        Schema::table('sms_lists', function (Blueprint $table) {
            $table->tinyInteger('type')
                ->default(0)
                ->comment('0: Gerçek Kişi, 1: Tüzel Kişi');

            $table->string('adres')->nullable();
            $table->string('unvan')->nullable();
            $table->string('tc', 20)->nullable();
            $table->string('vergi_no', 20)->nullable();
            $table->string('vergi_dairesi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sms_lists', function (Blueprint $table) {
            $table->dropColumn([
                'type',
                'adres',
                'unvan',
                'vergi_no',
                'vergi_dairesi',
            ]);
        });
    }
};
