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
        // Kolom id_pasien menyimpan pasien.id (lihat relasi periksa::pasienModels),
        // bukan users.id, sehingga foreign key yang lama salah arah.
        Schema::table('periksas', function (Blueprint $table) {
            $table->dropForeign(['id_pasien']);
        });

        Schema::table('periksas', function (Blueprint $table) {
            $table->foreign('id_pasien')->references('id')->on('pasien');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('periksas', function (Blueprint $table) {
            $table->dropForeign(['id_pasien']);
        });

        Schema::table('periksas', function (Blueprint $table) {
            $table->foreign('id_pasien')->references('id')->on('users', 'id');
        });
    }
};
