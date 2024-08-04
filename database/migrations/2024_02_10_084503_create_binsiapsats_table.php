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
        Schema::create('binsiapsats', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('satuan_id')->unsigned()->nullable();
            $table->bigInteger('kategori_id')->unsigned()->nullable();
            $table->string('kuantitatif')->nullable();
            $table->string('kualitatif')->nullable();
            $table->string('kemantapan')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();

            $table->foreign('satuan_id')->references('id')->on('satuan');
            $table->foreign('kategori_id')->references('id')->on('master_binsiapsat_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('binsiapsats');
    }
};
