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
        Schema::table('users', function (Blueprint $table) {
            $table->string('alamat')->nullable(); // Kolom alamat, nullable
            //$table->string('nik')->unique(); // Kolom NIK, harus unik
            //$table->json('jadwal_operasional')->nullable(); // Kolom jadwal operasional, tipe JSON
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
                Schema::table('users', function (Blueprint $table) {
        //		$table->dropColumn(['nik', 'jadwal_operasional']); // Hapus kolom
    		});
  
    }
};
