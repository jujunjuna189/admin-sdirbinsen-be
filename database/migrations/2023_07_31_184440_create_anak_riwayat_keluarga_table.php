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
        Schema::create('anak_riwayat_keluarga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('riwayat_keluarga_id')->unsigned();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->timestamps();
            $table->softDeletes();

            // Add foreign key constraint to 'riwayat_keluarga' table
            $table->foreign('riwayat_keluarga_id')->references('id')->on('riwayat_keluarga')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak_riwayat_keluarga');
    }
};
