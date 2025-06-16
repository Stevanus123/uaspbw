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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->string('nik', 6);
            $table->string('nama');
            $table->string('gender');
            $table->string('email');
            $table->enum('jenis', ['tetap', 'tidak tetap']);
            $table->integer('gaji_pokok');
            $table->integer('tunjangan_makan');
            $table->integer('potongan_bpjs');
            $table->integer('gaji_bersih')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
