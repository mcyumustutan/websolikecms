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
        Schema::create('vefatlists', function (Blueprint $table) {
            $table->id();
            $table->string('adSoyad');  // İsim ve Soyisim
            $table->string('anaBabaAdi')->nullable(); // Anne ve Baba Adı
            $table->date('vefatTarihi'); // Vefat Tarihi
            $table->string('cenazeYeri'); // Cenaze Yeri
            $table->string('cenazeZamani'); // Cenaze Yeri -> ikindi vakti / 14:50 vs...
            $table->string('mezarlik'); // Mezarlık
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vefatlists');
    }
};
