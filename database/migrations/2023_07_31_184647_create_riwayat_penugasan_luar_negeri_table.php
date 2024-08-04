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
        Schema::create('riwayat_penugasan_luar_negeri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('personil_id')->unsigned();
            $table->string('macam_tugas');
            $table->integer('tahun');
            $table->string('negara');
            $table->string('prestasi')->nullable();
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
        Schema::dropIfExists('riwayat_penugasan_luar_negeri');
    }
};
