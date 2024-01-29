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
        Schema::create('lisences', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lisence');
            $table->string('nomor_lisence');
            $table->string('vendor');
            $table->date('tanggal_keluar');
            $table->date('tanggal_expired');
            $table->string('jenis_lisence');
            $table->string('input_file')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licenses');
    }
};
