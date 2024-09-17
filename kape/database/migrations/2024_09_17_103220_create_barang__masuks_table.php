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
        Schema::create('barang__masuks', function (Blueprint $table) {
            $table->id();
            $table->string('Pengirim',50);
            $table->string('User_id_Penerima',length: 50);
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang__masuks');
    }
};
