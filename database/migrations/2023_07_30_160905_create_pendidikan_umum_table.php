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
        Schema::create('pendidikan_umum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('personil_id')->unsigned();
            $table->string('jenis_pendidikan');
            $table->integer('tahun');
            $table->string('nama_pendidikan');
            $table->string('prestasi')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Define foreign key constraint
            $table->foreign('personil_id')->references('id')->on('personil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikan_umum');
    }
};
