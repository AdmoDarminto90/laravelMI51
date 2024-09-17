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
        Schema::create('ditel_barang__keluars', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
             $table->string('User_id',50);
            $table->string('Barang_id',length: 50);
            $table->string('Jumlah',length: 50);
            $table->string('Lokasi',length: 50);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ditel_barang__keluars');
    }
};
