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
        Schema::create('demografis', function (Blueprint $table) {
            $table->id();
            $table->string('rt');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->text('jenis_kelamin');
            $table->text('agama');
            $table->text('status');
            $table->text('tingkat_pendidikan');
            $table->text('mata_pencarian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demografis');
    }
};
