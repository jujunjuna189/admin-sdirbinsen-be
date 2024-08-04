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
        Schema::create('riwayat_keluarga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('personil_id')->unsigned();
            $table->text('alamat_tinggal');
            $table->string('nomor_hp');
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('alamat_orang_tua')->nullable();
            $table->string('nama_istri_atau_suami')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();

            // Add foreign key constraint to 'personil' table
            $table->foreign('personil_id')->references('id')->on('personil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_keluarga');
    }
};
