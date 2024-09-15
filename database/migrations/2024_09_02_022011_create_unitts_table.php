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
        Schema::create('unitts', function (Blueprint $table) {
            $table->id();
            $table->string("Jenis");
            $table->string("Gambar");
            $table->string("Waktu");
            $table->string("Harga");
            $table->string("Nama_Penyewa");
            $table->string("Kontak_Penyewa");
            $table->integer("KTP_penyewa");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unitts');
    }
};
